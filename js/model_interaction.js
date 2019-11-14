
function wireframe()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
}

var headlightOn = true;

function headlight()
{
	headlightOn = !headlightOn;
	document.getElementById('model__NavInfo').setAttribute('headlight', headlightOn.toString());
}

function cameraPerspective()
{
	document.getElementById('model__PerspectiveCamera').setAttribute('bind', 'true');
}
function cameraFront()
{
	document.getElementById('model__FrontCamera').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__BackCamera').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__LeftCamera').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__RightCamera').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__TopCamera').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__BottomCamera').setAttribute('bind', 'true');
}

var spot1=true;
function spot1Toggle()
{
	spot1=!spot1;
	document.getElementById('model__SpotLight1').setAttribute('on', spot1.toString());
}

var spot2=true;
function spot2Toggle()
{
	spot2=!spot2;
	document.getElementById('model__SpotLight2').setAttribute('on', spot2.toString());
}

var omni1=true;
function omni1Toggle()
{
	omni1=!omni1;
	document.getElementById('model__OmniLight1').setAttribute('on', omni1.toString());
}

var omni2=true;
function omni2Toggle()
{
	omni2=!omni2;
	document.getElementById('model__OmniLight2').setAttribute('on', omni2.toString());
}

function animateModel()
{
	if(document.getElementById('model__DemoTimer').getAttribute('enabled')!= 'true')
	document.getElementById('model__DemoTimer').setAttribute('enabled', 'true');
else
	document.getElementById('model__DemoTimer').setAttribute('enabled', 'false');
}