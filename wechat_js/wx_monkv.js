var wx_monkv = (function(){
    
    var openid_val;
    var domain_val;
    var formdata_val = new Array();
    
    var url = {
        log : 'http://api.h5.quapp.net/index.php/log/action',
        userinfo : 'http://api.h5.quapp.net/index.php/wechatuser/openid',
        userset : 'http://api.h5.quapp.net/index.php/wechatuser/set',
        formsubmit : 'http://api.h5.quapp.net/index.php/form/add',
        formstat : 'http://api.h5.quapp.net/index.php/form/stat',
    };
    
    var wx_actionLog = function (action_val){
        
        var postdata = {
            openid : openid_val,
            domain : domain_val,
            action : action_val
        };
        $.post(url.log, postdata, function(data, textStatus){
            
        });
    }
    
    var wx_getUserInfo = function (callback_func){
        var postdata = {
            openid : openid_val,
            domain : domain_val,
        };
        
        $.post(url.userinfo, postdata, function(data, textStatus){
            if (data != "" && data.status == 'success'){
                callback_func(data);
            }
        },'json');
    }
    
    var wx_setUserInfo = function (userdata_val, success_callback, fail_callback){
        var postdata = {
            openid : openid_val,
            domain : domain_val,
            userdata : userdata_val,
        };
        
        $.post(url.userset, postdata, function(data, textStatus){
            if (data.status == 'success'){
                success_callback();
            }else{
                fail_callback();
            }
        }, 'json');
    }
    
    var wx_clearFormdata = function (){
        formdata_val = new Array();
    }
    
    var wx_pushFormdata = function(field_val, type_val, value_val){
        var tmp_obj = {
            field : field_val,
            type : type_val,
            value : value_val,
        };
        
        formdata_val.push(tmp_obj);
    }
    
    var wx_submitForm = function (form_name_val, callback_func){
        var postdata = {
            openid : openid_val,
            domain : domain_val,
            form_name : form_name_val,
            data : JSON.stringify(formdata_val),
        };
        
        $.post(url.formsubmit, postdata, function(data, textStatus){
            callback_func(data);
        }, 'json');
    }
    
    var wx_formStat = function (form_name_val, type_val, field_val, value_val, callback_func){
        var postdata = {
            domain : domain_val,
            form_name : form_name_val,
            type : type_val,
            field : field_val,
            value : value_val,
        };
        
        $.post(url.formstat, postdata, function(data, textStatus){
            callback_func(data);
        }, 'json');
    }
    
    return {
        config : function (_openid, _domain){
            openid_val = _openid;
            domain_val = _domain;
        },
        version : '1.0',
        actionLog : wx_actionLog,
        getUserInfo : wx_getUserInfo,
        setUserInfo : wx_setUserInfo,
        submitForm : wx_submitForm,
        formStat : wx_formStat,
        
        clearFormData : wx_clearFormdata,
        pushFormData : wx_pushFormdata,
    };
})();