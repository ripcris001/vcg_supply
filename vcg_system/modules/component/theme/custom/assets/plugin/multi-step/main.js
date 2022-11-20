const multiStep = {
    target: {
        main: null,
        current: null,
        next: null,
        previous: null,
        page:{
            current: null,
            next: null,
            previous: null
        }
    },
    setting: {
        opacity: null
    },
    init: function(param){
        const __self = this;
        if(param){
            if((typeof param !== 'undefined') && (typeof param === 'object') && !Array.isArray(param)){
                Object.entries(param).forEach(entry => {
                    const [key, value] = entry;
                    if(key === 'target'){
                        __self.target.main = value;
                    }else{
                        if(typeof __self[key] !== 'undefined'){
                            __self[key] = value;
                        }
                    }                    
                });
            }
            this.target.main = $(param.target);
        }
        this.event();
    },
    action: {},
    next: function(){
        const s = this;
        $(s.target.main).find("#progressbar li").eq($("fieldset").index(s.target.next)).addClass("active");
            s.target.next.show();
            s.target.current.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    s.setting.opacity = 1 - now;
                    s.target.current.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    s.target.next.css({
                        'opacity': s.setting.opacity
                    });
                },
                duration: 600
        });
    },
    previous: function(){
        const s = this;
        $(s.target.main).find("#progressbar li").eq($("fieldset").index(s.target.current)).removeClass("active");
        s.target.previous.show();
        s.target.current.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                s.setting.opacity = 1 - now;
                s.target.current.css({
                    'display': 'none',
                    'position': 'relative'
                });
                s.target.previous.css({
                    'opacity': s.setting.opacity
                });
            },
            duration: 600
        });
    },
    event: function(){
        const s = this;
        $(s.target.main).find('fieldset').on('click', '.next', function(){
            const ms_current_page = $(this).parent();
            const ms_next_page = $(this).parent().next();

            const ms_current_page_id = ms_current_page.attr("id");
            const ms_next_page_id = ms_next_page.attr("id");

            if(typeof s.action[ms_current_page_id] !== 'undefined'){
                if(typeof  s.action[ms_current_page_id] == 'function'){
                    s.action[ms_current_page_id](function(res){
                        if(typeof res.next !== 'undefined' && res.next){
                            s.target.current = ms_current_page;
                            s.target.next = ms_next_page;

                            s.target.page.current = ms_current_page_id;
                            s.target.page.next = ms_next_page_id;
                            s.next();
                        }
                    });
                }
            }else{
                s.target.current = ms_current_page;
                s.target.next = ms_next_page;

                s.target.page.current = ms_current_page_id;
                s.target.page.next = ms_next_page_id;
                
                s.next();
            }
        })
        $(s.target.main).find('fieldset').on('click', '.previous', function() {
            const ms_current_page = $(this).parent();
            const ms_previous_page = $(this).parent().prev();
            const ms_current_page_id = ms_current_page.attr("id");
            const ms_previous_page_id = ms_previous_page.attr("id");

            s.target.current = ms_current_page;
            s.target.previous = ms_previous_page;

            s.target.page.current = ms_current_page_id;
            s.target.page.previous = ms_previous_page_id;

            s.previous();
        });
    }
}