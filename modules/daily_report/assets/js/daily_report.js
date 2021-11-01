function view_event(e) {
    void 0 !== e && $.post(admin_url + "daily_report/view_event/" + e).done(function(e) {
        $("#event").html(e), $("#viewEvent").modal("show"), init_datepicker(), init_selectpicker(), validate_calendar_form()
    })
}

function delete_event(e) {
    confirm_delete() && requestGetJSON("daily_report/delete_event/" + e).done(function(e) {
        !0 !== e.success && "true" != e.success || window.location.reload()
    })
}

function validate_calendar_form() {
    appValidateForm($("body").find("._event form"), {
        title: "required",
        start: "required",
        reminder_before: "required"
    }, calendar_form_handler), appValidateForm($("body").find("#viewEvent form"), {
        title: "required",
        start: "required",
        reminder_before: "required"
    }, calendar_form_handler)
}

function calendar_form_handler(e) {
    return $.post(e.action, $(e).serialize()).done(function(e) {
        !0 !== (e = JSON.parse(e)).success && "true" != e.success || (alert_float("success", e.message), setTimeout(function() {
            var e = window.location.href;
            e = e.split("?"), window.location.href = e[0]
        }, 500))
    }), !1
}

    $(function() {
        var calendar_selector=$("#dailyReportCalendar");
        if(calendar_selector.length > 0) {
                validate_calendar_form();
                var n = {
                    themeSystem: "bootstrap3",
                    customButtons: {},
                    header: {
                        left: "prev,next today",
                        center: "title",
                        right: "month,agendaWeek,agendaDay,viewFullCalendar,dailyReportFilter"
                    },
                    editable: !1,
                    eventLimit: parseInt(app.options.calendar_events_limit) + 1,
                    views: {
                        day: {
                            eventLimit: !1
                        }
                    },
                    defaultView: app.options.default_view_calendar,
                    isRTL: "true" == isRTL,
                    eventStartEditable: !1,
                    timezone: app.options.timezone,
                    firstDay: parseInt(app.options.calendar_first_day),
                    year: moment.tz(app.options.timezone).format("YYYY"),
                    month: moment.tz(app.options.timezone).format("M"),
                    date: moment.tz(app.options.timezone).format("DD"),
                    loading: function(e, t) {
                        e && $("#calendar .fc-header-toolbar .btn-default").addClass("btn-info").removeClass("btn-default").css("display", "block"), e ? $(".dt-loader").removeClass("hide") : $(".dt-loader").addClass("hide")
                    },
                    eventSources: [{
                        url: admin_url + "daily_report/get_calendar_data",
                        data: function() {
                            var e = {staffs: $("#cf_staffs:selected").val()};
                            return $("#daily_report_filters").find("input:checkbox:checked").map(function() {
                                e[$(this).attr("name")] = !0
                            }).get(), jQuery.isEmptyObject(e) || (e.calendar_filters = !0), e
                        },
                        type: "POST",
                        error: function() {
                            console.error("There was error fetching calendar data")
                        }
                    }],
                    eventLimitClick: function(e, t) {
                        $("#calendar").fullCalendar("gotoDate", e.date), $("#calendar").fullCalendar("changeView", "basicDay")
                    },
                    eventRender: function(e, t) {
                        t.attr("title", e._tooltip), t.attr("onclick", e.onclick), t.attr("data-toggle", "tooltip"), e.url || t.click(function() {
                            view_event(e.eventid)
                        })
                    },
                    dayClick: function(e, t, a) {
                        var i = e.format();
                        $.fullCalendar.moment(i).hasTime() || (i += " 00:00");
                        var n = 24 == app.options.time_format ? app.options.date_format + " H:i" : app.options.date_format + " g:i A",
                            s = (new DateFormatter).formatDate(new Date(i), n);
                        return $("input[name='start'].datetimepicker").val(s), $("#newEventModal").modal("show"), !1
                    }
                };
                if ($("body").hasClass("dashboard") && (n.customButtons.viewFullCalendar = {
                        text: app.lang.calendar_expand,
                        click: function() {
                            window.location.href = admin_url + "daily_report/Daily_report"
                        }
                    }), n.customButtons.dailyReportFilter = {
                        text: app.lang.filter_by.toLowerCase(),
                        click: function() {
                            slideToggle("#daily_report_filters")
                        }
                    }, 1 == app.user_is_staff_member && ("" !== app.options.google_api && (n.googleCalendarApiKey = app.options.google_api), "" !== app.calendarIDs && (app.calendarIDs = JSON.parse(app.calendarIDs), 0 != app.calendarIDs.length)))
                    if ("" !== app.options.google_api)
                        for (var s = 0; s < app.calendarIDs.length; s++) {
                            var o = {};
                            o.googleCalendarId = app.calendarIDs[s], n.eventSources.push(o)
                        } else console.error("You have setup Google Calendar IDs but you dont have specified Google API key. To setup Google API key navigate to Setup->Settings->Google");
                calendar_selector.fullCalendar(n), get_url_param("new_event") && ($("input[name='start'].datetimepicker").val(get_url_param("date")), $("#newEventModal").modal("show"))
            }
    })