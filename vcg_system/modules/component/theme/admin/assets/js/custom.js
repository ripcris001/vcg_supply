const utils = {
    modal:{
        open: function(target){
            $(target).modal("show");
            return this;
        },
        close: function(target){
            $(target).modal("hide");
            return this;
        }
    },
    request: {
        input: {
            value: {}
        },
        url: null,
        key: null,
        type: 'post',
        sData: function(data){
            if(data){
                this.input.value = data;
            }
            return this;
        },
        sUrl: function(data){
            if(data){
                this.url = data;
            }
            return this;
        },
        set: function(data){
            if(data && Object.keys(data).indexOf('type') >= 0){
                this.type = data.type.toLowerCase();
            }
            if(data && data.data){
                this.input.value = data.data;
            }
            if(data && data.url){
                this.url = data.url;
            }
            return this;
        },
        reset: function(){
            this.input = {value: {}}
            this.key = null;
            this.url = null;
            return this;
        },
        buildInput: function(){
            const __self = this;
            let input = {};
                input = this.input;
                input.value = JSON.stringify(input.value);
            return input;
        },
        send: function(callback){
            const __self = this;
            callback = callback ? callback : function(){};
            this.input = this.buildInput();
            switch(__self.type){
                case 'get': __self.get(callback); break;
                case 'post': __self.post(callback); break;
                case 'put': __self.put(callback); break;    
                default: __self.post(callback); break;
            }
        },
        get: function(callback){
            const __self = this;
            callback = callback ? callback : function(){}
            $.get(this.url).done(function(res){
                __self.reset();
                if(res){
                    res = JSON.parse(res);
                }
                callback(res);
            });
        },
        post: function(callback){
            const __self =  this;
            callback = callback ? callback : function(){}
            $.post(this.url, this.input).done(function(res){
                __self.reset();
                if(res){
                    res = JSON.parse(res);
                }
                callback(res);
            });
        },
        put: function(callback){
            const __self =  this;
            callback = callback ? callback : function(){}
            $.get(this.url, this.input).done(function(res){
                __self.reset();
                if(res){
                    res = JSON.parse(res);
                }
                callback(res);
            });
        }
    },
    notify: {
        title: "",
        message: "",
        config: {
            type: 'success',
            allow_dismiss: true,
            newest_on_top: true,
            mouse_over: true,
            showProgressbar: false,
            spacing: 10,
            timer: 2000,
            placement: {
                from: 'bottom',
                align: 'right'
            },
            offset: {
                x: 30,
                y: 30
            },
            delay: 1000,
            z_index: 10000,
            animate: {
                enter: 'animated bounce',
                exit: 'animated bounce'
            }
        },
        setConfig: function(data) {
            const local = this;
            const oData = data ? Object.keys(data) : [];
            if (oData && oData.length) {
                for (let a = 0; a < oData.length; a++) {
                    const index = oData[a];
                    local.config[index] = data[index];
                }
            }
            return this;
        },
        setTitle: function(data) {
            if (data) {
                this.title = data;
            }
            return this;
        },
        setMessage: function(data) {
            if (data) {
                this.message = data;
            }
            return this;
        },
        setType: function(data) {
            if (data) {
                this.config.type = data ? data.toLowerCase() : "success";
            }
            return this;
        },
        load: function() {
            const local = this;
            $.notify({ title: local.title, message: local.message }, local.config);
        }
    },
    removeError: function(){
        $('body').on('input', '.form-error', function(){
            const local = $(this);
            const value = local.val();
            if(value.length){
                local.removeClass("form-error")
            }
        })
    },
    requreHandler: function(){
        $('body').find('.form-input.form-required').each(function(){
            const local = $(this);
            const attrReq = local.attr('required');
            if(!attrReq){
                local.attr("required", "required");
            }
        })
        $('body').on('input', '.form-input', function(){
            const local = $(this);
            const value = local.val();
            const attrReq = local.attr('required');
            if(value.length){
                local.removeClass("form-error")
            }else{
                if(attrReq){
                    local.addClass("form-error")
                }
            }
        })
    }

}

utils.removeError();
utils.requreHandler();