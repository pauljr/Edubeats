package com.defwiz.edubeats2016;

import org.apache.cordova.DroidGap;
/*import android.app.Activity;*/
/*import android.view.Menu;*/
import android.os.Bundle;



public class Edubeats extends DroidGap {

	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		super.loadUrl("file:///android_asset/www/index.html");
	}


}
