/*
setTimeout(() => {
    let aioa_script_tag = document.createElement("script");
    aioa_script_tag.src = "https://www.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js?colorcode=#420083&token=null&position=bottom_right";
    aioa_script_tag.id = "aioa-adawidget";
    aioa_script_tag.defer="true";
    document.getElementsByTagName("body")[0].appendChild(aioa_script_tag);
    console.log('load script');
    }, 3000);*/

setTimeout(() => {
		let aioa_script_tag = document.createElement("script");
		aioa_script_tag.src = "https://www.skynettechnologies.com/accessibilitynode/js/accessibility-loader.js?colorcode=#420083&token=ADAAIOA-A2BA8C8F7AA26ADF23AB7681F1F233D1&position=bottom_right";
		aioa_script_tag.id = "adajs";
		aioa_script_tag.defer="true";
		aioa_script_tag.type="module";
		document.getElementsByTagName("body")[0].appendChild(aioa_script_tag);
	},
	3000);