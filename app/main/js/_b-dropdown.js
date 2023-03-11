var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

(function(b,a){a.block["b-dropdown"]=function(e){var d=b(this),c,i,g,j,h=false,l=false,k=function(){c=d.find(".b-dropdown__list");i=b('<div class="b-dropdown__popup"/>');g=b('<iframe class="b-dropdown__iframe" frameborder="0" src="javascript:\'<body style=\\\'background:none;overflow:hidden\\\'>\'"/>');j=c.clone(true).addClass("b-dropdown__list_clone").hide();c.before(i);i.after(j);f();b(document).keydown(function(m){if(m.keyCode==27&&!(m.metaKey||m.ctrlKey||m.altKey||m.shiftKey)){f()}}).click(function(m){if(!b(m.target).is(".b-dropdown *")){f()}}).bind("popupsClose.lego",f);l=true},f=(function(){if(h){return}i.css("visibility","hidden").before(c).hide();j.hide();h=true});d.find(".b-dropdown__or").click(function(n){n.preventDefault();if(!l){k()}if(d.hasClass("b-dropdown_state_disabled")){d.trigger("popupDisabled.lego");return}if(h){b(document).trigger("popupsClose.lego",{source:d[0]});var o=b.Event("popupOpen.lego");d.trigger(o);if(!o.isDefaultPrevented()){j.css("display","");i.append(c).css("visibility","");if(e.direction=="up"||d.hasClass("b-dropdown_direction_up")){var m=i.height()-j.height();i.css("margin-top",-(m-(parseInt(c.css("padding-bottom"),10)+parseInt(b(this).closest(".b-dropdown__item").css("padding-bottom"),10))))}i.prepend(g).css("display","");h=false}}else{f()}})}})(jQuery,window.Lego);

}
/*
     FILE ARCHIVED ON 15:31:48 Feb 14, 2021 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 17:21:06 Aug 02, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 109.971
  exclusion.robots: 0.161
  exclusion.robots.policy: 0.148
  RedisCDXSource: 10.689
  esindex: 0.014
  LoadShardBlock: 75.669 (3)
  PetaboxLoader3.datanode: 75.673 (4)
  CDXLines.iter: 19.681 (3)
  load_resource: 1678.534
  PetaboxLoader3.resolve: 1165.467
*/