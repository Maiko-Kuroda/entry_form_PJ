console.log("javascript")
$(function () {

    console.log("form.js")
    $("form").submit(function(){
        console.log("submit")
        //エラーの初期化
        $("p.error").remove();
        $("dl dd").removeClass("error");

          //必須項目のチェック
          $(this).filter(".required",".validate").each(function(){
                if($(this).val()==""){
                    $(this).parent().prepend("<p class='error'>選択してください</p>")
                }
            })
        
        $(":text,textarea").filter(".validate").each(function(){
            
            //必須項目のチェック
            $(this).filter(".required").each(function(){
                if($(this).val()==""){
                    $(this).parent().prepend("<p class='error'>必須項目です</p>")
                }
            })
            
            //数値のチェック
            $(this).filter(".number").each(function(){
                if(isNaN($(this).val())){
                    $(this).parent().prepend("<p class='error'>数値のみ入力可能です</p>")
                }
            })
            
        })
        
        //ラジオボタンのチェック
        $(":radio").filter(".validate").each(function(){
            $(this).filter(".required").each(function(){
                if($("input[name="+$(this).attr("name")+"]:checked").size() == 0){
                    $(this).parent().prepend("<p class='error'>選択してください</p>")
                }
            })
        })
        
        //エラーの際の処理
        if($("p.error").size() > 0){
                $('html,body').animate({ scrollTop: $("p.error:first").offset().top-40 }, 'slow');
                $("p.error").parent().addClass("error");
                return false;
        }
    })
})

