function jsheader()
{
    if (typeof jQuery == 'undefined') 
    {	
	var script = document.createElement('script');
	script.type = "text/javascript";
	script.src = "https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js";
	document.getElementsByTagName('head')[0].insertBefore(script,null);
    }
}

function jsheader_analog()
{
    window.localta = true;
	var script = document.createElement('script');
	script.type = "text/javascript";
	script.src = "https://localtimes.info/js_widget/analog.min.js";
	document.getElementsByTagName('head')[0].insertBefore(script,null);
}

function jsheader_digital()
{
    window.localtd = true;
	var script = document.createElement('script');
	script.type = "text/javascript";
	script.src = "https://localtimes.info/js_widget/digitalc.min.js";
	document.getElementsByTagName('head')[0].insertBefore(script,null);

	var script1 = document.createElement('script');
	script1.type = "text/javascript";
	script1.src = "https://code.jquery.com/ui/1.10.1/jquery-ui.js";
	document.getElementsByTagName('head')[0].insertBefore(script1,null);
}

if (typeof window.localta == 'undefined' && typeof window.localtd == 'undefined')
    jsheader();

if (typeof window.localta == 'undefined')jsheader_analog();
function clock_init_function94985(){initCLock({radius:60,container_id:'clock_container94985',ggh:15,ggm:20,ggs:35,ggu:950,gid:'',gha:true,fna:'gb',ghb:false,ghf:true,bgi:'',gbc:'#FFFFFF',gfc:'#000000',gds:8.4,gtc:'#000000',sdn:true,dnf:12,roman:false,gnu:'https://localtimes.info/europe/United Kingdom/London/widget/',font_size:13,font_weight:'bold',font_family:'Trebuchet MS',second_marker:false,dial_style:'lines',handle_style:'classy',num_pos:'',shc:'#000000'}); }//window.onload = function(){output_html()}

//window.addEventListener('load', init()); // NB **not** 'onload'

window.addEventListener('load', function(){clock_init_function94985();}); // NB **not** 'onload'


//window.onload = function(){clock_init_function94985(); digital_onload();};

/*
if (window.addEventListener) // W3C standard
{
    window.addEventListener('onload', startclock(), false); // NB **not** 'onload'
} 
else if (window.attachEvent) // Microsoft
{
    window.attachEvent('onload', startclock());
}
*/
document.write('<div id="clock_container94985"></div>');