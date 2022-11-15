<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-warning-light">
                                    <i class="fa-solid fa-box"></i>
                                </div>
                                <div>
                                    <p class="mb-2">Today Sales</p>
                                    <h4 class="dashboard-data currency" data-id="today_sales">0</h4>
                                </div>
                            </div>                                
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-warning iq-progress progress-1" data-percent="85">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-info-light">
                                     <i class="fa-solid fa-money-bill"></i>
                                </div>
                                <div>
                                    <p class="mb-2">Total Sales</p>
                                    <h4 class="currency dashboard-data" data-id="total_sales">0.00</h4>
                                </div>
                            </div>                                
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-info iq-progress progress-1" data-percent="85">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-danger-light">
                                    <i class="fa-solid fa-file-invoice-dollar"></i>
                                </div>
                                <div>
                                    <p class="mb-2">Daily Transaction</p>
                                    <h4 class="dashboard-data" data-id="daily_transaction">0</h4>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-danger iq-progress progress-1" data-percent="70">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-success-light">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                                <div>
                                    <p class="mb-2">Daily Sales</p>
                                    <h4 class="currency dashboard-data" data-id="daily_sales">0.00</h4>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-success iq-progress progress-1" data-percent="75">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Yearly Sales Overview</h4>
                    </div>                        
                    <div class="card-header-toolbar d-flex align-items-center">
                        <!-- <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton001"
                                data-toggle="dropdown">
                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                aria-labelledby="dropdownMenuButton001">
                                <a class="dropdown-item" href="#">Year</a>
                                <a class="dropdown-item" href="#">Month</a>
                                <a class="dropdown-item" href="#">Week</a>
                            </div>
                        </div> -->
                    </div>
                </div>                    
                <div class="card-body">
                    <div id="overall"></div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-6">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Revenue Vs Cost</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton002"
                                data-toggle="dropdown">
                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                aria-labelledby="dropdownMenuButton002">
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="layout1-chart-2" style="min-height: 360px;"></div>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-lg-8">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Top Products</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton006"
                                data-toggle="dropdown">
                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                aria-labelledby="dropdownMenuButton006">
                                <a class="dropdown-item" href="#">Year</a>
                                <a class="dropdown-item" href="#">Month</a>
                                <a class="dropdown-item" href="#">Week</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled row top-product mb-0">
                        <li class="col-lg-3">
                            <div class="card card-block card-stretch card-height mb-0">
                                <div class="card-body">
                                    <div class="bg-warning-light rounded">
                                        <img src="../assets/images/product/01.png" class="style-img img-fluid m-auto p-3" alt="image">
                                    </div>
                                    <div class="style-text text-left mt-3">
                                        <h5 class="mb-1">Organic Cream</h5>
                                        <p class="mb-0">789 Item</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3">
                            <div class="card card-block card-stretch card-height mb-0">
                                <div class="card-body">
                                    <div class="bg-danger-light rounded">
                                        <img src="../assets/images/product/02.png" class="style-img img-fluid m-auto p-3" alt="image">
                                    </div>
                                    <div class="style-text text-left mt-3">
                                        <h5 class="mb-1">Rain Umbrella</h5>
                                        <p class="mb-0">657 Item</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3">
                            <div class="card card-block card-stretch card-height mb-0">
                                <div class="card-body">
                                    <div class="bg-info-light rounded">
                                        <img src="../assets/images/product/03.png" class="style-img img-fluid m-auto p-3" alt="image">
                                    </div>
                                    <div class="style-text text-left mt-3">
                                        <h5 class="mb-1">Serum Bottle</h5>
                                        <p class="mb-0">489 Item</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3">
                            <div class="card card-block card-stretch card-height mb-0">
                                <div class="card-body">
                                    <div class="bg-success-light rounded">
                                        <img src="../assets/images/product/02.png" class="style-img img-fluid m-auto p-3" alt="image">
                                    </div>
                                    <div class="style-text text-left mt-3">
                                        <h5 class="mb-1">Organic Cream</h5>
                                        <p class="mb-0">468 Item</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">  
            <div class="card-transparent card-block card-stretch mb-4">
                <div class="card-header d-flex align-items-center justify-content-between p-0">
                    <div class="header-title">
                        <h4 class="card-title mb-0">Best Item All Time</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div><a href="#" class="btn btn-primary view-btn font-size-14">View All</a></div>
                    </div>
                </div>
            </div>
            <div class="card card-block card-stretch card-height-helf">
                <div class="card-body card-item-right">
                    <div class="d-flex align-items-top">
                        <div class="bg-warning-light rounded">
                            <img src="../assets/images/product/04.png" class="style-img img-fluid m-auto" alt="image">
                        </div>
                        <div class="style-text text-left">
                            <h5 class="mb-2">Coffee Beans Packet</h5>
                            <p class="mb-2">Total Sell : 45897</p>
                            <p class="mb-0">Total Earned : $45,89 M</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-block card-stretch card-height-helf">
                <div class="card-body card-item-right">
                    <div class="d-flex align-items-top">
                        <div class="bg-danger-light rounded">
                            <img src="../assets/images/product/05.png" class="style-img img-fluid m-auto" alt="image">
                        </div>
                        <div class="style-text text-left">
                            <h5 class="mb-2">Bottle Cup Set</h5>
                            <p class="mb-2">Total Sell : 44359</p>
                            <p class="mb-0">Total Earned : $45,50 M</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    -->         
        <!-- <div class="col-lg-4">  
            <div class="card card-block card-stretch card-height-helf">
                <div class="card-body">
                    <div class="d-flex align-items-top justify-content-between">
                        <div class="">
                            <p class="mb-0">Income</p>
                            <h5>$ 98,7800 K</h5>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton003"
                                    data-toggle="dropdown">
                                    This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                    aria-labelledby="dropdownMenuButton003">
                                    <a class="dropdown-item" href="#">Year</a>
                                    <a class="dropdown-item" href="#">Month</a>
                                    <a class="dropdown-item" href="#">Week</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="layout1-chart-3" class="layout-chart-1"></div>
                </div>
            </div>
            <div class="card card-block card-stretch card-height-helf">
                <div class="card-body">
                    <div class="d-flex align-items-top justify-content-between">
                        <div class="">
                            <p class="mb-0">Expenses</p>
                            <h5>$ 45,8956 K</h5>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton004"
                                    data-toggle="dropdown">
                                    This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                    aria-labelledby="dropdownMenuButton004">
                                    <a class="dropdown-item" href="#">Year</a>
                                    <a class="dropdown-item" href="#">Month</a>
                                    <a class="dropdown-item" href="#">Week</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="layout1-chart-4" class="layout-chart-2"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">  
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Order Summary</h4>
                    </div>                        
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton005"
                                data-toggle="dropdown">
                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                aria-labelledby="dropdownMenuButton005">
                                <a class="dropdown-item" href="#">Year</a>
                                <a class="dropdown-item" href="#">Month</a>
                                <a class="dropdown-item" href="#">Week</a>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="card-body pb-2">
                    <div class="d-flex flex-wrap align-items-center mt-2">
                        <div class="d-flex align-items-center progress-order-left">
                            <div class="progress progress-round m-0 orange conversation-bar" data-percent="46">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value text-secondary">46%</div>
                            </div>
                            <div class="progress-value ml-3 pr-5 border-right">
                                <h5>$12,6598</h5>
                                <p class="mb-0">Average Orders</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ml-5 progress-order-right">
                            <div class="progress progress-round m-0 primary conversation-bar" data-percent="46">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value text-primary">46%</div>
                            </div>
                            <div class="progress-value ml-3">
                                <h5>$59,8478</h5>
                                <p class="mb-0">Top Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="layout1-chart-5"></div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Page end  -->
</div>
<script type="text/javascript">
    $(document).ready(function(){
        const dashboard = {
            data: {},
            chart: {},
            init: function(){
                this.getDashboardData();
            },
            getDashboardData: function(){
                const __self = this;
                utils.request.set({data: [], url: '/api/dashboard'}).send(function(res){
                    if(res.status){
                        __self.data = res.data;
                        __self.genDisplay();
                    }else{
                        utils.notify.setTitle("Error").setMessage("Unable to generate dashboard data").setType("danger").load();
                    }
                })
            },
            genDisplay: function(){
                const __self = this;
                const data = __self.data;
                const obj = Object.keys(data);
                const currencyData = ['daily_sales', 'total_sales', 'today_sales'] 
                if(obj.length){
                    $('.container-fluid').find('.dashboard-data').each(function(i){
                        const local = $(this);
                        const id = local.data('id');
                        if(typeof data[id] !== 'undefined'){
                            if(currencyData.indexOf(id) > -1){
                                local.addClass("currency").html(utils.currency(data[id]));
                            }else{
                                local.html(data[id])
                            }
                        }
                        
                    })
                     __self.chart();
                    
                }
                console.log(data);

            }, chart: function(param = null ){
                const __self = this;
                const data = __self.data;
                const monthData = data.monthData;
                const objMonth = Object.keys(monthData);
                options = {
                    chart: {
                        height: 350,
                        type: "line"
                    },
                    colors: ["#32BDEA", "#FF7E41"],
                    series: [{
                        name: "Transactions",
                        data: []
                    }],
                    title: {
                        text: "",
                        align: "left"
                    },
                    xaxis: {
                        categories: []
                    },
                    yaxis: {
                        tooltip: {
                            enabled: !0
                        },
                        labels: {
                            offsetX: -2,
                            offsetY: 0,
                            minWidth: 30,
                            maxWidth: 30,
                        },
                    }
                };
                if(objMonth.length){
                    let overall_total = 0;
                    for(let a = 0, count = objMonth.length; a < count; a++){
                        const index = objMonth[a];
                        const value = monthData[index];
                        options.series[0].data.push(value);
                        options.xaxis.categories.push(index);
                        overall_total += value;
                        if(a == (count - 1)){
                            options.title.text = `₱${utils.currency(overall_total)}`;
                           chart = new ApexCharts(document.querySelector("#overall"), options).render();
                        }
                    }
                }else{
                    options.series[0].data = [0,0,0,0,0,0,0,0,0,0,0,0];
                    options.xaxis.categories = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    chart = new ApexCharts(document.querySelector("#overall"), options).render();
                }
                console.log(data);
                
            }
        }

        dashboard.init();   
    })
</script>