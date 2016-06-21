/**
 * Created by PC on 14/11/2015.
 */

function ledON(){
	document.location.href="send_serial.php?port=com3&baud=115200&redto=leds.php&data=H";
}

function ledOFF(){
	document.location.href="send_serial.php?port=com3&baud=115200&redto=leds.php&data=L";
}
