function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<6)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"//bits.wikimedia.org/en.wikibooks.org/load.php","apiScript":"/w/api.php"}});(function(name,version,dependencies,group,source){})("MediaWikiSupport.loader","20130725T145045Z",[],null,"local");(function(name,version,dependencies,group,source){(function(mw,$){$(function(event){var $selected=$(mw.config.get('EmbedPlayer.RewriteSelector'));if($selected.length){var inx=0;var checkSetDone=function(){if(inx<$selected.length){$selected.slice(inx,inx+1).embedPlayer(function(){setTimeout(function(){checkSetDone();},5);});}inx++;}
;checkSetDone();}});$.fn.embedPlayer=function(readyCallback){var playerSet=this;mw.log('jQuery.fn.embedPlayer :: '+$(this).length);var dependencySet=['mw.EmbedPlayer'];var rewriteElementCount=0;$(this).each(function(inx,playerElement){var skinName='';$(playerElement).removeAttr('controls');if(!$.browser.mozilla){$(playerElement).parent().getAbsoluteOverlaySpinner().attr('id','loadingSpinner_'+$(playerElement).attr('id'));}$(mw).trigger('EmbedPlayerUpdateDependencies',[playerElement,dependencySet]);});dependencySet=$.uniqueArray(dependencySet);mediaWiki.loader.using(dependencySet,function(){window.gM=mw.jqueryMsg.getMessageFunction({});mw.processEmbedPlayers(playerSet,readyCallback);},function(e){throw new Error('Error loading EmbedPlayer dependency set: '+e.message);});};})(window.mediaWiki,window.jQuery);})("EmbedPlayer.loader","20130725T145134Z",[],null,"local");(function(name,version,dependencies,group,source){(function(mw,$){$(mw).bind('EmbedPlayerUpdateDependencies',function(event
,playerElement,classRequest){if(mw.isTimedTextSupported(playerElement)){classRequest=$.merge(classRequest,['mw.TimedText']);}});$(mw).bind('EmbedPlayerNewPlayer',function(event,embedPlayer){if(mw.isTimedTextSupported(embedPlayer)){embedPlayer.timedText=new mw.TimedText(embedPlayer);}});mw.isTimedTextSupported=function(embedPlayer){var mwprovider=embedPlayer['data-mwprovider']||$(embedPlayer).data('mwprovider');var showInterface=mw.config.get('TimedText.ShowInterface.'+mwprovider)||mw.config.get('TimedText.ShowInterface');if(showInterface=='always'){return true;}else if(showInterface=='off'){return false;}if($(embedPlayer).find('track').length!=0){return true;}else{return false;}};})(window.mediaWiki,window.jQuery);})("TimedText.loader","20130725T145134Z",[],null,"local");(function(name,version,dependencies,group,source){(function(mw,$){$(mw).bind('EmbedPlayerUpdateDependencies',function(event,embedPlayer,dependencySet){if($(embedPlayer).attr('data-mwtitle')){$.merge(dependencySet,[
'mw.MediaWikiPlayerSupport']);}});})(window.mediaWiki,jQuery);})("mw.MediaWikiPlayer.loader","20130725T145134Z",[],null,"local");mw.loader.register([["site","1363393124",[],"site"],["noscript","1347062400",[],"noscript"],["startup","1375248441",[],"startup"],["filepage","1347062400"],["user.groups","1347062400",[],"user"],["user","1347062400",[],"user"],["user.cssprefs","1347062400",["mediawiki.user"],"private"],["user.options","1347062400",[],"private"],["user.tokens","1347062400",[],"private"],["mediawiki.language.data","1375242174",["mediawiki.language.init"]],["skins.cologneblue","1374763704"],["skins.modern","1374763704"],["skins.monobook","1374763704"],["skins.vector","1374763704"],["skins.vector.js","1374763704",["jquery.delayedBind"]],["jquery","1374763704"],["jquery.appear","1374763704"],["jquery.arrowSteps","1374763704"],["jquery.async","1374763704"],["jquery.autoEllipsis","1374763704",["jquery.highlightText"]],["jquery.badge","1374763704",["mediawiki.language"]],[
"jquery.byteLength","1374763704"],["jquery.byteLimit","1374763704",["jquery.byteLength"]],["jquery.checkboxShiftClick","1374763704"],["jquery.chosen","1374763704"],["jquery.client","1374763704"],["jquery.color","1374763704",["jquery.colorUtil"]],["jquery.colorUtil","1374763704"],["jquery.cookie","1374763704"],["jquery.delayedBind","1374763704"],["jquery.expandableField","1374763704",["jquery.delayedBind"]],["jquery.farbtastic","1374763704",["jquery.colorUtil"]],["jquery.footHovzer","1374763704"],["jquery.form","1374763704"],["jquery.getAttrs","1374763704"],["jquery.hidpi","1374763704"],["jquery.highlightText","1374763704",["jquery.mwExtension"]],["jquery.hoverIntent","1374763704"],["jquery.json","1374763704"],["jquery.localize","1374763704"],["jquery.makeCollapsible","1375238094"],["jquery.mockjax","1374763704"],["jquery.mw-jump","1374763704"],["jquery.mwExtension","1374763704"],["jquery.placeholder","1374763704"],["jquery.qunit","1374763704"],["jquery.qunit.completenessTest",
"1374763704",["jquery.qunit"]],["jquery.spinner","1374763704"],["jquery.jStorage","1374763704",["jquery.json"]],["jquery.suggestions","1374763704",["jquery.autoEllipsis"]],["jquery.tabIndex","1374763704"],["jquery.tablesorter","1375238094",["jquery.mwExtension"]],["jquery.textSelection","1374763704",["jquery.client"]],["jquery.validate","1374763704"],["jquery.xmldom","1374763704"],["jquery.tipsy","1374763704"],["jquery.ui.core","1374763704",["jquery"],"jquery.ui"],["jquery.ui.widget","1374763704",[],"jquery.ui"],["jquery.ui.mouse","1374763704",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1374763704",[],"jquery.ui"],["jquery.ui.draggable","1374763704",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1374763704",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1374763704",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable",
"1374763704",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1374763704",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1374763704",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1374763704",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1374763704",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1374763704",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1374763704",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1374763704",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1374763704",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1374763704",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],[
"jquery.effects.core","1374763704",["jquery"],"jquery.ui"],["jquery.effects.blind","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1374763704",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1374763704",[
"jquery.effects.core"],"jquery.ui"],["mediawiki","1374763704"],["mediawiki.api","1374763704",["mediawiki.util"]],["mediawiki.api.category","1374763704",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1374763704",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.login","1374763704",["mediawiki.api"]],["mediawiki.api.parse","1374763704",["mediawiki.api"]],["mediawiki.api.watch","1374763704",["mediawiki.api","user.tokens"]],["mediawiki.icon","1374763704"],["mediawiki.debug","1374763704",["jquery.footHovzer"]],["mediawiki.debug.init","1374763704",["mediawiki.debug"]],["mediawiki.feedback","1374763704",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1374763704",["jquery.hidpi"]],["mediawiki.htmlform","1375238094"],["mediawiki.notification","1374763704",["mediawiki.page.startup"]],["mediawiki.notify","1374763704"],["mediawiki.searchSuggest","1375238094",["jquery.autoEllipsis","jquery.client","jquery.placeholder",
"jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1374763704",["mediawiki.util"]],["mediawiki.Uri","1374763704"],["mediawiki.user","1374763704",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1375238094",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1374763704",["mediawiki.legacy.wikibits","jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1374763704",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1374763704",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1374763704",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1374763704",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1375238094"],["mediawiki.action.view.postEdit","1375238094",["jquery.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.rightClickEdit","1374763704"],["mediawiki.action.edit.editWarning","1375238094"],
["mediawiki.action.watch.ajax","1347062400",["mediawiki.page.watch.ajax"]],["mediawiki.language","1374763704",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1374763704",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1374763704"],["mediawiki.language.init","1374763704"],["mediawiki.jqueryMsg","1374763704",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1374763704"],["mediawiki.page.ready","1374763704",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1374763704",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1375238094",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1375238094",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.special",
"1374763704"],["mediawiki.special.block","1374763704",["mediawiki.util"]],["mediawiki.special.changeemail","1375238094",["mediawiki.util"]],["mediawiki.special.changeslist","1374763704"],["mediawiki.special.changeslist.enhanced","1374763704"],["mediawiki.special.movePage","1374763704",["jquery.byteLimit"]],["mediawiki.special.preferences","1374763704"],["mediawiki.special.recentchanges","1374763704",["mediawiki.special"]],["mediawiki.special.search","1375238094"],["mediawiki.special.undelete","1374763704"],["mediawiki.special.upload","1375238094",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin","1374763704"],["mediawiki.special.createaccount","1374763704"],["mediawiki.special.createaccount.js","1375238094",["mediawiki.jqueryMsg"]],["mediawiki.special.javaScriptTest","1374763704",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1374763704",["jquery.getAttrs","jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]]
,["mediawiki.legacy.ajax","1374763704",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1374763704"],["mediawiki.legacy.config","1374763704",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1374763704",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1374763704",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1374763704"],["mediawiki.legacy.oldshared","1374763704"],["mediawiki.legacy.upload","1374763704",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.wikibits","1374763704",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1374763704"],["mediawiki.ui","1347062400"],["ext.gadget.colorcats","1347062400"],["ext.gadget.background-awesomeness","1347062400"],["ext.gadget.subject-pages","1347062400"],["ext.gadget.extlinks","1347062400",["mediawiki.util"]],["ext.gadget.navpop","1347062400"],["ext.gadget.Twinklerevert","1347062400",["mediawiki.util","jquery.ui.dialog","jquery.tipsy"]],[
"ext.gadget.twinklespeedy","1347062400",["mediawiki.util","jquery.ui.dialog","jquery.tipsy"]],["ext.gadget.twinklewarn","1366809435",["mediawiki.util","jquery.ui.dialog","jquery.tipsy"]],["ext.gadget.Twinkleunlink","1347062400",["mediawiki.util","jquery.ui.dialog","jquery.tipsy"]],["ext.gadget.purge","1347062400",["mediawiki.util"]],["ext.gadget.bottomtabs","1347062400"],["ext.gadget.twinkledelimages","1347062400"],["mw.MwEmbedSupport","1374763845",["jquery.triggerQueueCallback","Spinner","jquery.loadingSpinner","jquery.mwEmbedUtil","mw.MwEmbedSupport.style"]],["Spinner","1374763845"],["iScroll","1374763845"],["jquery.loadingSpinner","1374763845"],["mw.MwEmbedSupport.style","1374763845"],["mediawiki.UtilitiesTime","1374763845"],["mediawiki.client","1374763845"],["mediawiki.absoluteUrl","1374763845"],["mw.ajaxProxy","1374763845"],["fullScreenApi","1374763845"],["jquery.embedMenu","1374763845"],["jquery.ui.touchPunch","1374763845",["jquery.ui.core","jquery.ui.mouse"]],[
"jquery.triggerQueueCallback","1374763845"],["jquery.mwEmbedUtil","1374763845",["jquery.ui.dialog"]],["jquery.debouncedresize","1374763845"],["mw.Language.names","1374763845"],["mw.Api","1374763845"],["mw.MediaElement","1374763894"],["mw.MediaPlayer","1374763894"],["mw.MediaPlayers","1374763894",["mw.MediaPlayer"]],["mw.MediaSource","1374763894"],["mw.EmbedTypes","1374763894",["mw.MediaPlayers","mediawiki.Uri"]],["mw.EmbedPlayer","1375238094",["mediawiki.client","mediawiki.UtilitiesTime","mediawiki.Uri","mediawiki.absoluteUrl","mediawiki.jqueryMsg","fullScreenApi","mw.EmbedPlayerNative","mw.MediaElement","mw.MediaPlayers","mw.MediaSource","mw.EmbedTypes","jquery.client","jquery.hoverIntent","jquery.cookie","jquery.ui.mouse","jquery.debouncedresize","jquery.embedMenu","jquery.ui.slider","jquery.ui.touchPunch","mw.PlayerSkinKskin"]],["mw.EmbedPlayerKplayer","1374763894"],["mw.EmbedPlayerGeneric","1374763894"],["mw.EmbedPlayerJava","1374763894"],["mw.EmbedPlayerNative","1374763894"],[
"mw.EmbedPlayerImageOverlay","1374763894"],["mw.EmbedPlayerVlc","1374763894"],["mw.PlayerSkinKskin","1374763894"],["mw.PlayerSkinMvpcf","1374763894"],["mw.TimedText","1375238094",["mw.EmbedPlayer","jquery.ui.dialog","mw.TextSource"]],["mw.TextSource","1374763894",["mediawiki.UtilitiesTime","mw.ajaxProxy"]],["ext.wikihiero","1374763977"],["ext.wikihiero.Special","1374763977",["jquery.spinner"]],["ext.cite","1374763763",["jquery.tooltip"]],["jquery.tooltip","1374763763"],["ext.rtlcite","1374763763"],["ext.specialcite","1374763763"],["ext.geshi.local","1347062400"],["ext.flaggedRevs.basic","1374763812"],["ext.flaggedRevs.advanced","1375238094",["mediawiki.util"]],["ext.flaggedRevs.review","1375238094",["mediawiki.util","mediawiki.user","mediawiki.jqueryMsg"]],["ext.categoryTree","1375238094"],["ext.categoryTree.css","1374763739"],["mediawiki.api.titleblacklist","1374763895",["mediawiki.api"]],["ext.quiz","1374763864"],["ext.nuke","1374763848"],["ext.confirmEdit.fancyCaptcha.styles",
"1374763775"],["ext.confirmEdit.fancyCaptcha","1374763775",["mediawiki.api"]],["ext.centralauth","1375238094",["mediawiki.util","jquery.spinner"]],["ext.centralauth.centralautologin","1374763755",["mediawiki.notify","mediawiki.jqueryMsg"]],["ext.centralauth.noflash","1374763755"],["ext.centralauth.globalusers","1374763755"],["ext.centralauth.globalgrouppermissions","1374763755"],["ext.dismissableSiteNotice","1374763784",["jquery.cookie","mediawiki.util"]],["jquery.ui.multiselect","1374763759",["jquery.ui.core","jquery.ui.sortable","jquery.ui.draggable","jquery.ui.droppable","mediawiki.jqueryMsg"]],["ext.centralNotice.adminUi","1375139948",["jquery.ui.datepicker","jquery.ui.multiselect"]],["ext.centralNotice.adminUi.bannerManager","1374763759",["ext.centralNotice.adminUi","jquery.ui.dialog"]],["ext.centralNotice.adminUi.bannerEditor","1375139948",["ext.centralNotice.adminUi","jquery.ui.dialog"]],["ext.centralNotice.adminUi.bannerPreview","1374763759",[
"ext.centralNotice.bannerController"]],["ext.centralNotice.bannerStats","1374763759"],["ext.centralNotice.bannerController","1374763759",["jquery.cookie"]],["ext.collection.jquery.jstorage","1374763772",["jquery.json"]],["ext.collection.suggest","1374763772",["ext.collection.bookcreator"]],["ext.collection","1374763772",["ext.collection.bookcreator","jquery.ui.sortable"]],["ext.collection.bookcreator","1374763772",["ext.collection.jquery.jstorage"]],["ext.collection.checkLoadFromLocalStorage","1374763772",["ext.collection.jquery.jstorage"]],["ext.abuseFilter","1374763721"],["ext.abuseFilter.edit","1375238094",["mediawiki.util","mediawiki.api","jquery.textSelection","jquery.spinner"]],["ext.abuseFilter.tools","1374763721",["mediawiki.api","mediawiki.notify","user.tokens","jquery.spinner"]],["ext.abuseFilter.examine","1374763721",["jquery.spinner","mediawiki.api"]],["ext.vector.collapsibleNav","1375238094",["mediawiki.util","jquery.client","jquery.cookie","jquery.tabIndex"]],[
"ext.vector.expandableSearch","1374763933",["jquery.client","jquery.expandableField","jquery.delayedBind"]],["ext.vector.footerCleanup","1374763933",["mediawiki.jqueryMsg","jquery.cookie"]],["ext.vector.sectionEditLinks","1374763933",["jquery.cookie"]],["contentCollector","1374763946",[],"ext.wikiEditor"],["jquery.wikiEditor","1375238094",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1374763946",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1374763946",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1375238094",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title","mediawiki.jqueryMsg"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1374763946",[
"jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1374763946",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1374763946",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1374763946",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1374763946",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1374763946",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1374763946",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1374763946",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1374763946",["jquery.wikiEditor",
"jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1347062400",[],"ext.wikiEditor"],["ext.wikiEditor","1374763946",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1374763946",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1374763946",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1374763946",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1374763946",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1374763946",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1374763946",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],[
"ext.wikiEditor.templates","1374763946",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],["ext.wikiEditor.toc","1374763946",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1374763946",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1374763946",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1374763946",[],"ext.wikiEditor"],["ext.templateData","1374763890"],["mobile.mainpage.styles","1374763843",["mobile.startup"],"other"],["mobile.file.styles","1374763843",["mobile.startup"]],["mobile.file.scripts","1374763843",["mobile.startup"]],["mobile.styles.page","1374763843",["mobile.startup"]],["mobile.styles","1374763843"],["mobile.styles.beta","1374763843"],["mobile.head","1374763843"],["mobile.startup","1374763843",["mobile.head"]],["mobile.stable.plumbing",
"1375214454",["mobile.startup"]],["mobile.beta.plumbing","1375214454",["mobile.startup"]],["mobile.beta.common","1375238094",["mobile.beta.plumbing","mobile.stable.common"]],["mobile.beta","1375238094",["mobile.stable","mobile.beta.common"]],["mobile.action.history","1374763843",["mobile.startup"],"other"],["mobile.history","1374763843"],["mobile.alpha.plumbing","1375214454",["mobile.startup"]],["mobile.alpha","1375238094",["mobile.stable","mobile.beta","mobile.history","mobile.alpha.plumbing","mobile.nearby"]],["mobile.toast.styles","1374763843"],["mobile.stable.styles","1374763843"],["mobile.stable.common","1375238094",["mobile.startup","mobile.stable.plumbing","mobile.toast.styles","mediawiki.jqueryMsg"]],["mobile.stable","1375238094",["mobile.startup","mobile.stable.common","mediawiki.util","mobile.stable.styles"]],["mobile.desktop","1374763843",["jquery.cookie"]],["mobile.nearby.plumbing","1375214454",["mobile.startup"]],["mobile.nearby.previews","1374763843",[
"mobile.nearby.scripts","mobile.beta.common"]],["mobile.nearby.watchstar","1374763843",["mobile.nearby.scripts","mobile.stable"]],["mobile.nearby.styles","1374763843"],["mobile.nearby","1375238094",["mobile.stable.common","mobile.nearby.styles","mobile.nearby.plumbing","jquery.json"]],["mobile.nearby.scripts","1374763843",["mobile.nearby"]],["mobile.notifications.styles","1374763843"],["mobile.uploads.plumbing","1375214454",["mobile.startup"]],["mobile.uploads.scripts","1375238094",["mobile.uploads.plumbing","mobile.stable.styles","mobile.stable.common"]],["mobile.mobilediff.scripts.beta","1375214454",["mobile.head"]],["mobile.thanks","1375214454",["mobile.beta.common"]],["zero.config","1374763973"],["mobile.watchlist.schema","1347062400",["ext.eventLogging"]],["mobile.uploads.schema","1347062400",["ext.eventLogging"]],["mobile.editing.schema","1347062400",["ext.eventLogging"]],["schema.MobileWatchlistInteraction","1347062400",["ext.eventLogging"]],["ext.math.mathjax","1374763836",[],
"ext.math.mathjax"],["ext.math.mathjax.enabler","1374763836"],["ext.babel","1374763736"],["ext.vipsscaler","1374763934",["jquery.ucompare"]],["jquery.ucompare","1374763934"],["ext.apiSandbox","1375238094",["mediawiki.util","jquery.ui.button"]],["ext.interwiki.specialpage","1374763825",["jquery.makeCollapsible"]],["ext.codeEditor","1374763764",["ext.wikiEditor.toolbar","jquery.codeEditor"],"ext.wikiEditor"],["jquery.codeEditor","1374763764",["jquery.wikiEditor","ext.codeEditor.ace","jquery.ui.resizable"],"ext.wikiEditor"],["ext.codeEditor.ace","1374763764",[],"ext.codeEditor.ace"],["ext.codeEditor.ace.modes","1374763764",["ext.codeEditor.ace"],"ext.codeEditor.ace"],["ext.codeEditor.geshi","1374763764",[],"ext.wikiEditor"],["ext.scribunto","1374763869",["jquery.ui.dialog"]],["ext.scribunto.edit","1374763869",["ext.scribunto","mediawiki.api"]],["ext.eventLogging","1374763799",["jquery.json","mediawiki.util"]],["ext.eventLogging.jsonSchema","1374763799"],["ext.campaigns","1374763737",[
"mediawiki.user","jquery.cookie"]],["schema.NavigationTiming","1347062400",["ext.eventLogging"]],["ext.navigationTiming","1374763845",["schema.NavigationTiming"]],["ext.uls.languagenames","1375248441"],["ext.uls.displaysettings","1374763918",["ext.uls.languagesettings","ext.uls.webfonts","jquery.i18n","mediawiki.api.parse"]],["ext.uls.geoclient","1374763918"],["ext.uls.ime","1374763918",["jquery.ime","ext.uls.init","ext.uls.preferences"]],["ext.uls.nojs","1374763918"],["ext.uls.init","1374763918",["ext.uls.languagenames","mediawiki.Uri","mediawiki.util","jquery.client","jquery.json","jquery.uls","ext.uls.i18n"]],["ext.uls.i18n","1374763918",["jquery.i18n"]],["ext.uls.inputsettings","1375238094",["ext.uls.languagesettings","ext.uls.ime","jquery.i18n"]],["ext.uls.interface","1375238094",["ext.uls.init","jquery.tipsy","ext.uls.displaysettings","ext.uls.inputsettings"]],["ext.uls.languagesettings","1374763918",["ext.uls.preferences"]],["ext.uls.preferences","1374763918",["mediawiki.user",
"mediawiki.api","jquery.jStorage"]],["ext.uls.webfonts","1374763918",["jquery.webfonts","ext.uls.init","ext.uls.webfonts.repository","ext.uls.preferences"]],["ext.uls.webfonts.repository","1374763918"],["jquery.i18n","1374763918",["mediawiki.libs.pluralruleparser"]],["jquery.ime","1374763918"],["jquery.uls","1374763918",["jquery.i18n","jquery.uls.grid","jquery.uls.data"]],["jquery.uls.compact","1374763918",["jquery.uls"]],["jquery.uls.data","1374763918"],["jquery.uls.grid","1374763918"],["jquery.webfonts","1374763918"],["ext.TemplateSandbox","1374763891"],["ext.checkUser","1374763762",["mediawiki.util"]],["mw.PopUpMediaTransform","1374763894",["jquery.ui.dialog"]],["embedPlayerIframeStyle","1374763894"],["ext.tmh.transcodetable","1375238094"],["mw.MediaWikiPlayerSupport","1374763894",["mw.Api"]]]);mw.config.set({"wgLoadScript":"//bits.wikimedia.org/en.wikibooks.org/load.php","debug":false,"skin":"vector","stylepath":"//bits.wikimedia.org/static-1.22wmf12/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|ftps\\:\\/\\/|ssh\\:\\/\\/|sftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|xmpp\\:|sip\\:|sips\\:|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|tel\\:|sms\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|bitcoin\\:|magnet\\:|urn\\:|geo\\:|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/w","wgScriptExtension":".php","wgScript":"/w/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"//en.wikibooks.org","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.22wmf12","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Wikibooks","5":"Wikibooks talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","102":"Cookbook","103":"Cookbook talk","108":"Transwiki",
"109":"Transwiki talk","110":"Wikijunior","111":"Wikijunior talk","112":"Subject","113":"Subject talk","828":"Module","829":"Module talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"wikibooks":4,"wikibooks_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"cookbook":102,"cookbook_talk":103,"transwiki":108,"transwiki_talk":109,"wikijunior":110,"wikijunior_talk":111,"subject":112,"subject_talk":113,"module":828,"module_talk":829,"wb":4,"wj":110,"cat":14,"cook":102,"sub":112,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Wikibooks","wgFileExtensions":["png","gif","jpg","jpeg","tiff","tif","xcf","pdf","mid","ogg","ogv","svg","djvu","ogg","ogv","oga","flac","wav","webm"],"wgDBname":"enwikibooks","wgFileCanRotate":true,"wgAvailableSkins":{"vector":"Vector","monobook":"MonoBook","modern":"Modern","cologneblue":"CologneBlue"},
"wgExtensionAssetsPath":"//bits.wikimedia.org/static-1.22wmf12/extensions","wgCookiePrefix":"enwikibooks","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"EmbedPlayer.DirectFileLinkWarning":true,"EmbedPlayer.EnableOptionsMenu":true,"EmbedPlayer.DisableJava":false,"EmbedPlayer.DisableHTML5FlashFallback":true,"TimedText.ShowInterface":"always","TimedText.ShowAddTextLink":true,"EmbedPlayer.WebPath":"//bits.wikimedia.org/static-1.22wmf12/extensions/TimedMediaHandler/MwEmbedModules/EmbedPlayer","wgCortadoJarFile":false,"TimedText.ShowInterface.local":"off","AjaxRequestTimeout":30,"MediaWiki.DefaultProvider":"local","MediaWiki.ApiProviders":{"wikimediacommons":{"url":"//commons.wikimedia.org/w/api.php"}},"MediaWiki.ApiPostActions":["login","purge","rollback","delete","undelete","protect","block","unblock","move","edit","upload","emailuser","import","userrights"],"EmbedPlayer.OverlayControls":true,"EmbedPlayer.CodecPreference":["webm","h264","ogg"],
"EmbedPlayer.DisableVideoTagSupport":false,"EmbedPlayer.ReplaceSources":null,"EmbedPlayer.EnableFlavorSelector":false,"EmbedPlayer.EnableIpadHTMLControls":true,"EmbedPlayer.WebKitPlaysInline":false,"EmbedPlayer.EnableIpadNativeFullscreen":false,"EmbedPlayer.iPhoneShowHTMLPlayScreen":true,"EmbedPlayer.ForceLargeReplayButton":false,"EmbedPlayer.LibraryPage":"http://www.kaltura.org/project/HTML5_Video_Media_JavaScript_Library","EmbedPlayer.RewriteSelector":"video,audio,playlist","EmbedPlayer.DefaultSize":"400x300","EmbedPlayer.ControlsHeight":31,"EmbedPlayer.TimeDisplayWidth":85,"EmbedPlayer.KalturaAttribution":true,"EmbedPlayer.AttributionButton":{"title":"Kaltura html5 video library","href":"http://www.kaltura.com","class":"kaltura-icon","style":[],"iconurl":false},"EmbedPlayer.EnableRightClick":true,"EmbedPlayer.EnabledOptionsMenuItems":["playerSelect","download","share","aboutPlayerLibrary"],"EmbedPlayer.WaitForMeta":true,"EmbedPlayer.ShowNativeWarning":true,
"EmbedPlayer.ShowPlayerAlerts":true,"EmbedPlayer.EnableFullscreen":true,"EmbedPlayer.EnableTimeDisplay":true,"EmbedPlayer.EnableVolumeControl":true,"EmbedPlayer.NewWindowFullscreen":false,"EmbedPlayer.FullscreenTip":true,"EmbedPlayer.FirefoxLink":"http://www.mozilla.com/en-US/firefox/upgrade.html?from=mwEmbed","EmbedPlayer.NativeControls":false,"EmbedPlayer.NativeControlsMobileSafari":true,"EmbedPlayer.FullScreenZIndex":999998,"EmbedPlayer.ShareEmbedMode":"iframe","EmbedPlayer.SkinList":["mvpcf","kskin"],"EmbedPlayer.DefaultSkin":"mvpcf","EmbedPlayer.MonitorRate":250,"EmbedPlayer.UseFlashOnAndroid":false,"EmbedPlayer.EnableURLTimeEncoding":"flash","EmbedPLayer.IFramePlayer.DomainWhiteList":"*","EmbedPlayer.EnableIframeApi":true,"EmbedPlayer.PageDomainIframe":true,"EmbedPlayer.NotPlayableDownloadLink":true,"EmbedPlayer.BlackPixel":
"data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%01%00%00%00%01%08%02%00%00%00%90wS%DE%00%00%00%01sRGB%00%AE%CE%1C%E9%00%00%00%09pHYs%00%00%0B%13%00%00%0B%13%01%00%9A%9C%18%00%00%00%07tIME%07%DB%0B%0A%17%041%80%9B%E7%F2%00%00%00%19tEXtComment%00Created%20with%20GIMPW%81%0E%17%00%00%00%0CIDAT%08%D7c%60%60%60%00%00%00%04%00%01'4'%0A%00%00%00%00IEND%AEB%60%82","TimedText.ShowRequestTranscript":false,"TimedText.NeedsTranscriptCategory":"Videos needing subtitles","TimedText.BottomPadding":10,"TimedText.BelowVideoBlackBoxHeight":40,"wgCollectionVersion":"1.6.1","wgCollapsibleNavBucketTest":false,"wgCollapsibleNavForceNewVersion":false,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"},"wgStopMobileRedirectCookie":{"name":"stopMobileRedirect","duration":30,"domain":".wikibooks.org","path":"/"},"wgMFNearbyEndpoint":"",
"wgMFNearbyNamespace":0,"wgEventLoggingBaseUri":"//bits.wikimedia.org/event.gif","wgNavigationTimingSamplingFactor":5000,"wgULSIMEEnabled":true,"wgULSPosition":"interlanguage","wgULSAnonCanChangeLanguage":false,"wgULSEventLogging":false,"wgULSNoImeSelectors":["#wpCaptchaWord"],"wgNoticeFundraisingUrl":"https://donate.wikimedia.org/wiki/Special:LandingCheck","wgCentralPagePath":"//meta.wikimedia.org/w/index.php","wgCentralBannerDispatcher":"//meta.wikimedia.org/wiki/Special:BannerRandom","wgCentralBannerRecorder":"//meta.wikimedia.org/wiki/Special:RecordImpression","wgNoticeXXCountries":["XX","EU","AP","A1","A2","O1"],"wgNoticeNumberOfBuckets":4,"wgNoticeBucketExpiry":7,"wgNoticeNumberOfControllerBuckets":2,"wgNoticeCookieShortExpiry":1209600});};if(isCompatible()){document.write(
"\u003Cscript src=\"//bits.wikimedia.org/en.wikibooks.org/load.php?debug=false\u0026amp;lang=en\u0026amp;modules=jquery%2Cmediawiki%2CSpinner%7Cjquery.triggerQueueCallback%2CloadingSpinner%2CmwEmbedUtil%7Cmw.MwEmbedSupport\u0026amp;only=scripts\u0026amp;skin=vector\u0026amp;version=20130725T145045Z\"\u003E\u003C/script\u003E");}delete isCompatible;
/* cache key: enwikibooks:resourceloader:filter:minify-js:7:b1c1d3e9ce57c5c779bd7e400923e2f0 */