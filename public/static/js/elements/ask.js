function Ask(form){
    
    form.submit(function(e){
        e.preventDefault();
        $.ajax({
                type: 'POST',
                url: "/question_add",
                dataType: 'text',
                data:"name="+form.find("input[name='name']").val()+"&email="+form.find("input[name='email']").val()
                    +"&question="+form.find("textarea[name='question']").val()
                    +"&csrfmiddlewaretoken="+form.find("input[name='csrfmiddlewaretoken']").val()
            })
            .done(function(){
                form.parent().parent().modal("hide");
                form.find("input[name='name']").val('')
                form.find("input[name='email']").val('')
                form.find("textarea[name='question']").val('');
            })
            .fail(function(){
                alert('Сервер временно недоступен. Пожалуйста свяжитесь с нашим менеджером по телефону');
            });
    })
}