<?php

namespace oe800\Special\Listeners;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;

class AddBBCode
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }

    public function addBBCode(ConfigureFormatter $event)
    {
	 $event->configurator->BBCodes->addCustom(
            '[NOTE]{TEXT}[/NOTE]',
            '<div class="notepaper">{TEXT}</div>'
        );

	 $event->configurator->BBCodes->addCustom(
            '[CFIRE]{TEXT}[/CFIRE]',
            '<h1 class="css-fizzy">{TEXT}</h1>'
        );

	$event->configurator->BBCodes->addCustom(
            '[SHAKE]{TEXT}[/SHAKE]',
            '<h1 class="shake shake-constant">{TEXT}</h1>'
        );

	$event->configurator->BBCodes->addCustom(
            '[TYPE]{TEXT}[/TYPE]',
            '<p class="line-1 anim-typewriter">{TEXT}</P>'
        );

	 $event->configurator->BBCodes->addCustom(
            '[CRANKY]{TEXT}[/CRANKY]',
            '<p class="cranky">{TEXT}</p>'
        );

	$event->configurator->BBCodes->addCustom(
            '[SACRAMENTO]{TEXT}[/SACRAMENTO]',
            '<p class="sacramento">{TEXT}</p>'
        );

	$event->configurator->BBCodes->addCustom(
            '[MONOTON]{TEXT}[/MONOTON]',
            '<p class="monoton">{TEXT}</p>'
        );

	$event->configurator->BBCodes->addCustom(
            '[KUSHAN]{TEXT}[/KUSHAN]',
	    '<p class="kushan">{TEXT}</p>'
        );

	 $event->configurator->BBCodes->addCustom(
            '[STEXT]{COLOR},{COLOR2},{TEXT}[/STEXT]',
            '<p class="shadowtext" style="--main-shadow: {COLOR}; --main-font-color: {COLOR2};">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
            '[ELECTRIFY]{TEXT},{COLOR},{COLOR2},{COLOR3}[/ELECTRIFY]',
'<svg xmlns:xlink="www.w3.org/1999/xlink" width="100%" height="100%"><defs><text id="{TEXT}" x="50%" y="50%" font-family="Voltaire" font-size="68px" font-weight="600" text-anchor="middle" alignment-baseline="middle">{TEXT}</text></defs><filter id="glow"> <feGaussianBlur id="glowBlur" stdDeviation="3.5" result="coloredBlur"/><feMerge><feMergeNode in="coloredBlur"/><feMergeNode in="SourceGraphic"/></feMerge></filter><filter id="shock"><feTurbulence type="fractalNoise" baseFrequency="0.2" numOctaves="1" seed="2" result="noise" id="noise"> <animate attributeType="XML" attributeName="seed" from="2" to="120" dur="12s" repeatCount="indefinite"/></feTurbulence><feMorphology id="morph1" in="SourceGraphic" operator="dilate" radius="10" result="morph1" /><feMorphology id="morph2" in="morph1" operator="dilate" radius="2" result="morph2" /><feComposite operator="out" in="morph2" in2="morph1" result="strokeText"/><feDisplacementMap xChannelSelector="R" yChannelSelector="G" in="strokeText" in2="noise" result="displacementMap" color-interpolation-filters="sRGB" scale="10" /> <feGaussianBlur stdDeviation="5" result="coloredBlur"/> <feMerge> <feMergeNode in="coloredBlur"/> <feMergeNode in="displacementMap"/> </feMerge></filter> <filter id="shock2"><feTurbulence type="fractalNoise" baseFrequency="0.2" numOctaves="1" seed="2" result="noise" id="noise"> <animate attributeType="XML" attributeName="seed" from="2" to="120" dur="10s" repeatCount="indefinite"/></feTurbulence><feMorphology id="morph3" in="SourceGraphic" operator="dilate" radius="1" result="morph1" /><feMorphology id="morph4" in="morph1" operator="dilate" radius="1" result="morph2" /><feComposite operator="out" in="morph2" in2="morph1" result="strokeText"/><feDisplacementMap xChannelSelector="R" yChannelSelector="G" in="strokeText" in2="noise" result="displacementMap" color-interpolation-filters="sRGB" scale="10" /> <feGaussianBlur stdDeviation="5" result="coloredBlur"/> <feMerge> <feMergeNode in="coloredBlur"/> <feMergeNode in="displacementMap"/> </feMerge></filter> <use xlink:href="#{TEXT}" id="textShock" x="2" y="2" filter="url(#shock)" stroke="0" stroke-width="1" fill="{COLOR}"/> <use xlink:href="#{TEXT}" id="textShock" x="2" y="2" filter="url(#shock2)" stroke="0" stroke-width="1" fill="{COLOR2}"/> <use xlink:href="#{TEXT}" id="textFill" x="0" y="0" fill="{COLOR3}" /> <use xlink:href="#{TEXT}" id="textGlow" x="0" y="0" filter="url(#glow)" stroke="{COLOR}" stroke-width="0.1" fill="transparent"/></svg>'
        );


$event->configurator->BBCodes->addCustom(
            '[bposter]{COLOR},{COLOR2},{COLOR3},{COLOR4},{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5}[/bposter]',
            '<div id="posbody"><h1 class="posh1" style="--main-background: {COLOR}; --main-border: {COLOR2}; --main-strong: {COLOR3}; --main-span: {COLOR4}"><postrong>{TEXT}</postrong><pospan>{TEXT2}</pospan><postrong>{TEXT3}</postrong><pospan>{TEXT4}</pospan><postrong>{TEXT5}</postrong></h1></div>'
        );


$event->configurator->BBCodes->addCustom(
            '[CALICON]{TEXT},{TEXT2},{NUMBER},{COLOR},{COLOR2},{COLOR3},{COLOR4},{COLOR5}[/CALICON]',
            '<div id="calbody" style="--main-month-bg: {COLOR}; --main-month-font: {COLOR2}; --main-day-number-font: {COLOR3}; --main-cal-line: {COLOR4}; --main-cal-body: {COLOR5};">
<time datetime="2014-09-20" class="icon">
  <calem>{TEXT}</calem>
  <calstrong>{TEXT2}</calstrong>
  <calspan>{NUMBER}</calspan>
</time>
</div>'
        );

$event->configurator->BBCodes->addCustom(
            '[bgscroll][/bgscroll]',
            '<div id="scrollbody" style="--main-scroll-font: red; --main-scroll-font-size: 30px; --main-scroll-bg: transparent;"><p class="scrolltext"> Example for Scrolling Pattern</p></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[MMARK][/MMARK]',
            '<div id="mpinbody"><div id="mpin"></div><div id="mpulse"></div></div>'
        );

    }
}
