define([
    "jQuery",
    "jQueryUI",
	"bootstrap", 
    "highchart",
    "sidebar",
    "datatables",
    "datatablesBootstrap",
	], function (
    $,
    jQueryUI,
	bootstrap, 
    highchart,
    sidebar ,
    datatables,
    datatablesBootstrap
	) {
    return {  
        table:null,
        init: function () { 
        	App.initFunc(); 
            App.initEvent(); 
            console.log("LOADED");
            
            $('#example1 tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );

            var table1 = $('#example1').DataTable();
             // Apply the search
            table1.columns().every( function () {
                var that = this;
         
                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );

            $('#example2 tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );
            var table2 = $('#example2').DataTable();
             // Apply the search
            table2.columns().every( function () {
                var that = this;
         
                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );

            var table3 = $('#example3').DataTable();
            $('#example3 tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );
             // Apply the search
            table3.columns().every( function () {
                var that = this;
         
                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
         
            $(".loadingpage").hide();
		}, 
        initEvent : function(){   
            $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?a=e&filename=aapl-ohlc.json&callback=?', function (data) {
                // create the chart
                Highcharts.chart('usercount', {


                    rangeSelector: {
                        selected: 1
                    },

                    title: {
                        text: 'User Count'
                    },

                    series: [{
                        type: 'line',
                        name: 'User Count',
                        data: data,
                      
                    }]
                });
            });
                        // Radialize the colors
            Highcharts.setOptions({
                colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
                    return {
                        radialGradient: {
                            cx: 0.5,
                            cy: 0.3,
                            r: 0.7
                        },
                        stops: [
                            [0, color],
                            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                        ]
                    };
                })
            });


            // Build the chart
            Highcharts.chart('locationcount', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Location Count'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    data: [
                        { name: 'Thailand', y: 56.33 },
                        { name: 'Indonesia',y: 24.03 },
                        { name: 'Amerika', y: 10.38 },
                        { name: 'Vietnam', y: 4.77 },
                        { name: 'China', y: 0.91 },
                        { name: 'Malaysia', y: 0.2 }
                    ]
                }]
            });

        } 
	}
});