<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewOrderRequest;
use App\Http\Requests\NewReviewRequest;
use App\Mail\OrderShipped;
use App\Model\Order;
use App\Model\Banner;
use App\Model\FundamentalSetting;
use App\Model\Gallery;
use App\Model\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::published()->get();
        $reviews = Review::published()->onMain()->get();
        $gallery = Gallery::published()->onMain()->get(['title', 'cover'])->first();
        $countGal = Gallery::published()->count() - 1;
        $count_work = trans_choice('my.count_work', $countGal, ['value' => $countGal]);
        $contacts = ['tel1', 'tel2', 'email1', 'email2', 'geometry', 'address'];
        $settings = FundamentalSetting::whereIn('key' , $contacts)->pluck('value', 'key');
        return view('home')
            ->with('banners', $banners)
            ->with('gallery', $gallery)
            ->with('count_work', $count_work)
            ->with('reviews', $reviews)
            ->with('settings', $settings);
    }

    /**
     * @param NewOrderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    public function addBackCall(NewOrderRequest $request)
    {
        $order = new Order(['type' => 'Для УК и ТСЖ']);
        $order->fill($request->only($order->getFillable()));
        $order->save();
        Mail::to(env('MAIL_NOTIFICATION', 'blizhekdomu@yandex.ru'))->send(new OrderShipped($order));
        if ($request->ajax()) {
            return response()->json([
                'success' => 'Письмо успешно отправлено!'
            ]);
        }
        return redirect()->back()->with(['back_call' => 'Форма успешно отправлена']);
    }

    /**
     * @param NewOrderRequest $request
     * @return JsonResponse|\Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    public function askQuestion(NewOrderRequest $request)
    {
        $order = new Order(['type' => 'Вопрос']);
        $order->fill($request->only($order->getFillable()));
        $order->save();
        Mail::to(env('MAIL_NOTIFICATION', 'blizhekdomu@yandex.ru'))->send(new OrderShipped($order));
        if ($request->ajax()) {
            return response()->json([
                'success' => 'Вопрос успешно отправлен!'
            ]);
        }

        return redirect()->back()->with(['ask_question' => 'Форма успешно отправлена']);
    }

    /**
     * @param NewOrderRequest $request
     * @return JsonResponse|\Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    public function backRing(NewOrderRequest $request)
    {
        $order = new Order(['type' => 'Обратный звонок']);
        $order->fill($request->only($order->getFillable()));
        $order->save();
        Mail::to(env('MAIL_NOTIFICATION', 'blizhekdomu@yandex.ru'))->send(new OrderShipped($order));
        if ($request->ajax()) {
            return response()->json([
                'success' => 'Заявка успешно отправлена!'
            ]);
        }

        return redirect()->back()->with(['back_ring' => 'Форма успешно отправлена']);
    }

    /**
     * @param NewReviewRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    public function addReview(NewReviewRequest $request)
    {
        $review = new Review();
        $review->fill($request->only($review->getFillable()));
        $review->save();
        Mail::to(env('MAIL_NOTIFICATION', 'blizhekdomu@yandex.ru'))->send(new OrderShipped($order));
        return redirect()->back()->with(['add_review' => 'Форма успешно отправлена']);
    }
}
