<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="quest_form_caption">
        Не нашли ответа? Свяжитесь с нами!
    </div>

    <form action="{{ route('ask_question') }}" class="form_question" onsubmit="sendForm(this); return false;" method="post">
        {{ csrf_field() }}
        <input type="email" name="email" placeholder="Ваш E-Mail" class="input_placeholder">
        <input type="submit" class="submit_button" value="Отправить">
    </form>

</div>