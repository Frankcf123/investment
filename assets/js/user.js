
$(function() {

    $('#login_submit').click(function(){
        var email_txt=$('#email').val();
        var password_txt=$('#password').val();
        // alert(password_txt);
        $.ajax({
            type:'post',
            url:'/user/AjaxLogin',
            data:{
                email:email_txt,
                password:$.md5(password_txt)
            },
            async:true,
            dataType:'json'
            ,
            success:function(data){
                if(data.code='1'){
                    alert(data.msg);
                }else{
                    alert(data.msg);
                }
            },
            error:function(){
                alert('System error');
               exit;
            }
        });
    });

    $('#register_submit').click(function(){
        var email_txt=$('#email').val();
        var password_txt=$('#password').val();
        var password_re_txt=$('#password_re').val();
        var username=$('#username').val();
        if(password_txt != password_re_txt){
            alert("Password must be same");
        }
        $.ajax({
            type:'post',
            url:'/user/AjaxRegister',
            data:{
                email:email_txt,
                username:username,
                password:$.md5(password_txt)
            },
            async:true,
            dataType:'json',
            success:function(data){
                if(data.code='0'){
                    alert(data.msg);
                }else{
                    alert(data.msg);
                }
            },
            error:function(){
                alert('System error');
                exit;
            }
        });
    });
})

//# for id
//. for class js