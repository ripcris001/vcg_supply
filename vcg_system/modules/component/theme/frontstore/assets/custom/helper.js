const utils = {
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
    }
}