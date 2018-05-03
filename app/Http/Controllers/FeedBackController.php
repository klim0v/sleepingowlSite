<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewOrderRequest;
use App\Http\Requests\NewReviewRequest;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use App\Model\Order;
use App\Model\Review;
use Illuminate\Support\Facades\Mail;

class FeedBackController extends Controller
{

    /**
     * @param NewOrderRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function footer(Request $request)
    {
        $order = new Order(['type' => 'Из подвала сайта']);
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function askQuestion(Request $request)
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function backRing(Request $request)
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
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function onlineConsult(Request $request)
    {
        $order = new Order(['type' => 'Онлайн консультация' . ($request->input('call') ? ' по телефону' : '' )]);
        $order->fill($request->only($order->getFillable()));
        $order->save();
        Mail::to(env('MAIL_NOTIFICATION', 'blizhekdomu@yandex.ru'))->send(new OrderShipped($order));
        if ($request->ajax()) {
            return response()->json([
                'success' => 'Заявка успешно отправлена!'
            ]);
        }

        return redirect()->back()->with(['form' => 'Форма успешно отправлена']);
    }

    /**
     * @param NewReviewRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addReview(Request $request)
    {
        $review = new Review();
        $review->fill($request->only($review->getFillable()));
        $review->save();
        Mail::to(env('MAIL_NOTIFICATION', 'blizhekdomu@yandex.ru'))->send(new OrderShipped($order));
        return redirect()->back()->with(['add_review' => 'Форма успешно отправлена']);
    }
}
