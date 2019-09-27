(function($) {
  "use strict";
  $(document).ready(function() {
    /* Date picker*/
    var thisApp = this;

    //var dateTo = moment().format("MM-DD-YYYY"));
    var dateFrom = moment().subtract(7,'y').format("YYYY-MM-DD");
    console.log(dateFrom);
   $('.max-date').attr("max",dateFrom);
    var BASEURL = "https://api.safepal.co";
    $("input").on("change", function() {
      this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD").format(
          this.getAttribute("data-date-format")
        )
      );
    });

    // submitting se;f report
    $("#selfReportForm").submit(function(e) {
      e.preventDefault();
      $('#notify').show().addClass("alert-info").text("Submitting data");
      thisApp.genToken(function(err, token) {
        //get token and s
        console.log(token);
        var formdata = {
          age: thisApp._calculateAge($("#selfReportForm .date").val()),
          latitude: $("#selfReportForm #latitude").val(),
          longitude: $("#selfReportForm #longitude").val(),
          reporter: "self_reporter",
          report_source: "web",
          reporter_relationship: "self",
          reportDate: moment(new Date()).format("DD-MM-YYYY"),
          location: $("#selfReportForm .location").val(),
          disability: $("#selfReportForm .disability").val(),
          type: $("#selfReportForm .type").val(),
          typeID: 1,
          gender: thisApp.displayRadioValue(),
          details: $("#selfReportForm .details").val(),
          contact: $("#selfReportForm .contact").val(),
          incident_date: "Unknown",
          perpetuator: "Unknown",
          token: token
        };
        //alert(JSON.stringify(formdata));
        thisApp.submitReport(formdata)
        // thisApp.post("/api/v1/reports/addreport", formdata, function(
        //   err,
        //   data
        // ) {
        //   err ? console.log(err) : console.log(data);
        // });
      });
    });

    $("#palReportForm").submit(function(e) {
      e.preventDefault();
      $('#notify').show().addClass("alert-info").text("Submitting data");
      thisApp.genToken(function(err, token) {
        console.log(token);
        //get token and s
        var formdata = {
          age: $("#palReportForm .age").val(),
          latitude: $("#palReportForm #latitude").val(),
          longitude: $("#palReportForm #longitude").val(),
          reporter: "pal_reporter",
          report_source: "web",
          reporter_relationship: $("#palReportForm .reporter_relationship").val(),
          reportDate: moment(new Date()).format("DD-MM-YYYY"),
          location: $("#palReportForm .location").val(),
          disability: $("#palReportForm .disability").val(),
          type: $("#palReportForm .type").val(),
          typeID: 1,
          gender: thisApp.displayRadioValue(),
          details: $("#palReportForm .details").val(),
          contact: $("#palReportForm .contact").val(),
          incident_date: "Unknown",
          perpetuator: "Unknown",
          token: token
        };
        //alert(JSON.stringify(formdata));
        thisApp.submitReport_pal(formdata)
        // thisApp.post("/api/v1/reports/addreport", formdata, function(
        //   err,
        //   data
        // ) {
        //   err ? console.log(err) : console.log(data);
        // });
      });
    });

    this._calculateAge = function(birthday) {
      // console.log(birthday) // birthday is a date
      var ageDifMs = Date.now() - new Date(birthday).getTime();
      var ageDate = new Date(ageDifMs); // miliseconds from epoch
      console.log(ageDate.getUTCFullYear() - 1970);
      return Math.abs(ageDate.getUTCFullYear() - 1970);
    };
    this.displayRadioValue = function() {
      var ele = document.getElementsByName("gender");
      var result = null;
      var i = 0;
      for (i = 0; i < ele.length; i++) {
        if (ele[i].checked) {
          result = ele[i].value;
        }
      }
      return result;
    };
    this.genToken = function(callback) {
      fetch(BASEURL+"/api/v1/auth/newtoken", {
          "method": "GET",
         // mode:"cors",
          "headers": {
            "userid": "C7rPaEAN9NpPGR8e9wz9bzw",
          //  'Access-Control-Allow-Origin':'*',
          }
        })
        .then(response => response.json())
        .then(responseJson => {
          //data_ = responseJson;
          return callback(null, responseJson.token);
        })
        .catch(err => {
          console.log(err);
          return callback(err);
        });
    };

    this.submitReport = function(data) {
      var formdata = data;
      fetch(BASEURL + "/api/v1/reports/addreport", {
        method: 'post',
        mode:'cors',
        headers:{
          "Content-Type":"application/json",
          "userid": "C7rPaEAN9NpPGR8e9wz9bzw",

        },
        body: JSON.stringify(formdata)
      })
      .then(response => response.text())
      .then(function(response) {
        var obj = response.substring(0, response.length-5);
        console.log(obj)
        let obj_ = JSON.parse(obj);
        $('#notify').text("");
        $('#notify').show().removeClass("alert-info").addClass("alert-success").text(obj_.message);
        $('#selfReportForm')[0].reset();
        $("#csoModal").modal();
        $("#csoModal .SpNumber").text(obj_.casenumber)
       
        var table = "";
        $("#csoModal .csos").html("");
        $.each(obj_.csos, function (key, value) {
          table +='<tr>'+
          '<td>' + value.cso_name + '</td>' +
          '<td>' + value.cso_location + '</td>' +
          '<td>' + value.cso_working_hours + '</td>' +
          '<td>' + value.cso_phone_number + '</td>'
        });
        $("#csoModal .csos").html(table);
        setTimeout(function(){
          $('#notify').hide();
        },5000);
      }).catch(function(response) {
        console.log(response);
         // console.log(text);
          $('#notify').text("");
          $('#notify').show().removeClass("alert-info").addClass("alert-danger").text("Something went wrong.");
      });
      // var settings = {
      //   type: "POST",
      //     "headers": {
      //       "userid": "C7rPaEAN9NpPGR8e9wz9bzw",
      //     },
      //   data: formdata,
      //   url: BASEURL + "/api/v1/reports/addreport"
      // };
      // $.ajax(settings)
      //   .done(function(response) {
      //     // console.log("Hello");
      //     var obj = response.substring(response.length, 5);
      //     let obj_ = JSON.parse(obj);
      //     $('#notify').text("");
      //     $('#notify').show().removeClass("alert-info").addClass("alert-success").text(obj_.message);
      //     $('#selfReportForm')[0].reset();
      //     $("#csoModal").modal();
      //     $("#csoModal .SpNumber").text(obj_.casenumber)
         
      //     var table = "";
      //     $("#csoModal .csos").html("");
      //     $.each(obj_.csos, function (key, value) {
      //       table +='<tr>'+
      //       '<td>' + value.cso_name + '</td>' +
      //       '<td>' + value.cso_location + '</td>' +
      //       '<td>' + value.cso_working_hours + '</td>' +
      //       '<td>' + value.cso_phone_number + '</td>'
      //     });
      //     $("#csoModal .csos").html(table);
      //     setTimeout(function(){
      //       $('#notify').hide();
      //     },5000)

      //   })
      //   .fail(function(response, text) {
      //     console.log(response);
      //     console.log(text);
      //     $('#notify').text("");
      //     $('#notify').show().removeClass("alert-info").addClass("alert-danger").text(text);
      //   });
    };

    this.submitReport_pal = function(data) {
      var formdata = data;
      fetch(BASEURL + "/api/v1/reports/addreport", {
        method: 'post',
        mode:'cors',
        headers:{
          "Content-Type":"application/json",
          "userid": "C7rPaEAN9NpPGR8e9wz9bzw",

        },
        body: JSON.stringify(formdata)
      })
      .then(response => response.text())
      .then(function(response) {
        console.log(response);
        var obj = response.substring(0, response.length-5);
          let obj_ = JSON.parse(obj);
          $('#notify').text("");
          $('#notify').show().removeClass("alert-info").addClass("alert-success").text(obj_.message);
          $('#palReportForm')[0].reset();
          $("#csoModal").modal();
          $("#csoModal .SpNumber").text(obj_.casenumber)
         
          var table = "";
          $("#csoModal .csos").html("");
          $.each(obj_.csos, function (key, value) {
            table +='<tr>'+
            '<td>' + value.cso_name + '</td>' +
            '<td>' + value.cso_location + '</td>' +
            '<td>' + value.cso_working_hours + '</td>' +
            '<td>' + value.cso_phone_number + '</td>'
          });
          $("#csoModal .csos").html(table);
          setTimeout(function(){
            $('#notify').hide();
          },5000);
      }).catch(function(response) {
        console.log(response);
         // console.log(text);
          $('#notify').text("");
          $('#notify').show().removeClass("alert-info").addClass("alert-danger").text("Something went wrong.");
      });
      // var settings = {
      //   type: "POST",
      //   "headers": {
      //     "userid": "C7rPaEAN9NpPGR8e9wz9bzw",
      //   },
      //   data: formdata,
      //   url: BASEURL + "/api/v1/reports/addreport"
      // };
      // $.ajax(settings)
      //   .done(function(response) {
      //     // console.log("Hello");
      //     var obj = response.substring(response.length, 5);
      //     let obj_ = JSON.parse(obj);
      //     $('#notify').text("");
      //     $('#notify').show().removeClass("alert-info").addClass("alert-success").text(obj_.message);
      //     $('#palReportForm')[0].reset();
      //     $("#csoModal").modal();
      //     $("#csoModal .SpNumber").text(obj_.casenumber)
         
      //     var table = "";
      //     $("#csoModal .csos").html("");
      //     $.each(obj_.csos, function (key, value) {
      //       table +='<tr>'+
      //       '<td>' + value.cso_name + '</td>' +
      //       '<td>' + value.cso_location + '</td>' +
      //       '<td>' + value.cso_working_hours + '</td>' +
      //       '<td>' + value.cso_phone_number + '</td>'
      //     });
      //     $("#csoModal .csos").html(table);
      //     setTimeout(function(){
      //       $('#notify').hide();
      //     },5000)

      //   })
      //   .fail(function(response, text) {
      //     console.log(response);
      //     console.log(text);
      //     $('#notify').text("");
      //     $('#notify').show().removeClass("alert-info").addClass("alert-danger").text(text);
      //   });
    };
    // this.post = function(requesturl = "", data_sent = {}, callback) {
    //   let error_ = null;
    //   let data_ = {};
    //   fetch(BASEURL + requesturl, {
    //     method: "POST",
    //     headers: {
    //       Accept: "application/json",
    //       "Content-Type": "application/json",
    //       userid: "C7rPaEAN9NpPGR8e9wz9bzw"
    //     },
    //     body: JSON.stringify(data_sent),
    //     mode: "no-cors"
    //   })
    //     .then(response => response.json())
    //     .then(responseJson => {
    //       data_ = responseJson;
    //       return callback(error_, data_);
    //     })
    //     .catch(error => {
    //       error_ = error;
    //       console.log("error", error);
    //       return callback(error_);
    //     });
    // };

    /*==Left Navigation Accordion ==*/
    if ($.fn.dcAccordion) {
      $("#nav-accordion").dcAccordion({
        eventType: "click",
        autoClose: true,
        saveState: true,
        disableLink: true,
        speed: "slow",
        showCount: false,
        autoExpand: true,
        classExpand: "dcjq-current-parent"
      });
    }
    /*==Slim Scroll ==*/
    if ($.fn.slimScroll) {
      $(".event-list").slimscroll({
        height: "305px",
        wheelStep: 20
      });
      $(".conversation-list").slimscroll({
        height: "360px",
        wheelStep: 35
      });
      $(".to-do-list").slimscroll({
        height: "300px",
        wheelStep: 35
      });
    }
    /*==Nice Scroll ==*/
    if ($.fn.niceScroll) {
      $(".leftside-navigation").niceScroll({
        cursorcolor: "#1FB5AD",
        cursorborder: "0px solid #fff",
        cursorborderradius: "0px",
        cursorwidth: "3px"
      });

      $(".leftside-navigation")
        .getNiceScroll()
        .resize();
      if ($("#sidebar").hasClass("hide-left-bar")) {
        $(".leftside-navigation")
          .getNiceScroll()
          .hide();
      }
      $(".leftside-navigation")
        .getNiceScroll()
        .show();

      $(".right-stat-bar").niceScroll({
        cursorcolor: "#1FB5AD",
        cursorborder: "0px solid #fff",
        cursorborderradius: "0px",
        cursorwidth: "3px"
      });
    }

    /*==Easy Pie chart ==*/
    if ($.fn.easyPieChart) {
      $(".notification-pie-chart").easyPieChart({
        onStep: function(from, to, percent) {
          $(this.el)
            .find(".percent")
            .text(Math.round(percent));
        },
        barColor: "#39b6ac",
        lineWidth: 3,
        size: 50,
        trackColor: "#efefef",
        scaleColor: "#cccccc"
      });

      $(".pc-epie-chart").easyPieChart({
        onStep: function(from, to, percent) {
          $(this.el)
            .find(".percent")
            .text(Math.round(percent));
        },
        barColor: "#5bc6f0",
        lineWidth: 3,
        size: 50,
        trackColor: "#32323a",
        scaleColor: "#cccccc"
      });
    }

    /*== SPARKLINE==*/
    if ($.fn.sparkline) {
      $(".d-pending").sparkline([3, 1], {
        type: "pie",
        width: "40",
        height: "40",
        sliceColors: ["#e1e1e1", "#8175c9"]
      });

      var sparkLine = function() {
        $(".sparkline").each(function() {
          var $data = $(this).data();
          $data.type == "pie" &&
            $data.sliceColors &&
            ($data.sliceColors = eval($data.sliceColors));
          $data.type == "bar" &&
            $data.stackedBarColor &&
            ($data.stackedBarColor = eval($data.stackedBarColor));

          $data.valueSpots = {
            "0:": $data.spotColor
          };
          $(this).sparkline($data.data || "html", $data);

          if ($(this).data("compositeData")) {
            $spdata.composite = true;
            $spdata.minSpotColor = false;
            $spdata.maxSpotColor = false;
            $spdata.valueSpots = {
              "0:": $spdata.spotColor
            };
            $(this).sparkline($(this).data("compositeData"), $spdata);
          }
        });
      };

      var sparkResize;
      $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(function() {
          sparkLine(true);
        }, 500);
      });
      sparkLine(false);
    }

    if ($.fn.plot) {
      var datatPie = [30, 50];
      // DONUT
      $.plot($(".target-sell"), datatPie, {
        series: {
          pie: {
            innerRadius: 0.6,
            show: true,
            label: {
              show: false
            },
            stroke: {
              width: 0.01,
              color: "#fff"
            }
          }
        },

        legend: {
          show: true
        },
        grid: {
          hoverable: true,
          clickable: true
        },

        colors: ["#ff6d60", "#cbcdd9"]
      });
    }

    /*==Collapsible==*/
    $(".widget-head").click(function(e) {
      var widgetElem = $(this)
        .children(".widget-collapse")
        .children("i");

      $(this)
        .next(".widget-container")
        .slideToggle("slow");
      if ($(widgetElem).hasClass("ico-minus")) {
        $(widgetElem).removeClass("ico-minus");
        $(widgetElem).addClass("ico-plus");
      } else {
        $(widgetElem).removeClass("ico-plus");
        $(widgetElem).addClass("ico-minus");
      }
      e.preventDefault();
    });

    /*==Sidebar Toggle==*/

    $(".leftside-navigation .sub-menu > a").click(function() {
      var o = $(this).offset();
      var diff = 80 - o.top;
      if (diff > 0)
        $(".leftside-navigation").scrollTo("-=" + Math.abs(diff), 500);
      else $(".leftside-navigation").scrollTo("+=" + Math.abs(diff), 500);
    });

    $(".sidebar-toggle-box .fa-bars").click(function(e) {
      $(".leftside-navigation").niceScroll({
        cursorcolor: "#1FB5AD",
        cursorborder: "0px solid #fff",
        cursorborderradius: "0px",
        cursorwidth: "3px"
      });

      $("#sidebar").toggleClass("hide-left-bar");
      if ($("#sidebar").hasClass("hide-left-bar")) {
        $(".leftside-navigation")
          .getNiceScroll()
          .hide();
      }
      $(".leftside-navigation")
        .getNiceScroll()
        .show();
      $("#main-content").toggleClass("merge-left");
      e.stopPropagation();
      if ($("#container").hasClass("open-right-panel")) {
        $("#container").removeClass("open-right-panel");
      }
      if ($(".right-sidebar").hasClass("open-right-bar")) {
        $(".right-sidebar").removeClass("open-right-bar");
      }

      if ($(".header").hasClass("merge-header")) {
        $(".header").removeClass("merge-header");
      }
    });
    $(".toggle-right-box .fa-bars").click(function(e) {
      $("#container").toggleClass("open-right-panel");
      $(".right-sidebar").toggleClass("open-right-bar");
      $(".header").toggleClass("merge-header");

      e.stopPropagation();
    });

    $(".header,#main-content,#sidebar").click(function() {
      if ($("#container").hasClass("open-right-panel")) {
        $("#container").removeClass("open-right-panel");
      }
      if ($(".right-sidebar").hasClass("open-right-bar")) {
        $(".right-sidebar").removeClass("open-right-bar");
      }

      if ($(".header").hasClass("merge-header")) {
        $(".header").removeClass("merge-header");
      }
    });

    $(".panel .tools .fa").click(function() {
      var el = $(this)
        .parents(".panel")
        .children(".panel-body");
      if ($(this).hasClass("fa-chevron-down")) {
        $(this)
          .removeClass("fa-chevron-down")
          .addClass("fa-chevron-up");
        el.slideUp(200);
      } else {
        $(this)
          .removeClass("fa-chevron-up")
          .addClass("fa-chevron-down");
        el.slideDown(200);
      }
    });

    $(".panel .tools .fa-times").click(function() {
      $(this)
        .parents(".panel")
        .parent()
        .remove();
    });

    // tool tips

    $(".tooltips").tooltip();

    // popovers

    $(".popovers").popover();
  });
})(jQuery);
