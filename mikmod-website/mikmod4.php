<html>
<head>
<title>Mikmod player version 4</title>
</head>
<body>
<h1>Mikmod player version 4</h1>
<img src="mikmod.png" alt="mikmod logo">

<h2>Overview:</h2>
<p>
The mikmod player is a curses based text mode player, which relies on libmikmod
to play module music. 
The user interface is very functional and efficient. 
Files are loaded by libmikmod, sound output is handled by libmikmod
and playback is also handled by libmikmod.
</p>
<p>
The time when I only needed to listen to module music is gone. People often 
release their compos as mp3 or ogg. I like to listen to video game music in 
their own format (spc, nsf, sid, gym, psf...). I became upset of being forced 
to exit mikmod when I wanted to listen to other formats.
</p>
<p>
Mikmod player version 4 will add support for more music formats using a plugin architecture. See below for planned features.
</p>
<hr>
<h2>New features:<h2>
<h3>Plugins:</h3>
<a href="http://www.xmms.org/">xmms</a> uses plugins.<br>
<a href="http://foobar2000.org/">foobar2000</a> uses plugins.<br>
Why? Because plugins are good for various reasons. It sorts of impose
a modular desing to the application. Also, users can improve the player 
by adding support for new type of music or output without messing 
with the player code.<br>
<br>
Planned plugins are:<br>
<ul>
	<li>oss output plugin</li>
	<li>TODO: sdl output plugin</li>
	<li>libmikmod input plugin, to listen to module music of course!</li>
	<li>vorbis input plugin, for listening to ogg vorbis files.</li>
	<li>adplug input plugin, to listen to OPL2 music.</li>
	<li>spc input plugin based on snes9x code, for portable spc playback.</li>
	<li>TODO: spc input plugin based on sexypsf (snesapu), for high quality spc playback.</li>
	<li>TODO: mp3 input plugin</li>
	<li>TODO: sid input plugin (commodore 64)</li>
	<li>TODO: nsf input plugin (nes)</li>
	<li>TODO: gym input plugin (genesis)</li>
</ul>
In the first release, there will be input and output plugins. Visualisation and filter plugins will come later.<br>
<h3>Useful features:</h3>
<ul>
	<li>Silence detection. Some file formats do not provide information on the duration
	of the tune. This feature will detect when a long silence period(configurable 
	length) occurs and assume the end of the song is reached.</li>
	<li>Fadeout. Automatic fadeout at the end of songs, or fadeout according to hints
	from the input plugin.</li>
	<li>URL support, for plugins supporting streams or special plugins like tone generator.</li>
	<li>Importation of m3u playlists</li>
	<li>Displays more information abuot the song than previous version. Author, Dumper, Copyright, Album, track...</li>
</ul>

<p>
Why not use xmms you ask? I dont like being forced to use X just to listen to music and I like to be able to manage my playlist and control playback remotely using ssh (I mean more than just play/stop/rew).
</p>
<hr>
<h2>Todo:</h2>
The new mikmod player is far from being finished. There are still a lot of things to do:<br>
<ul>
	<li>Handling of plugin configuration (save/load from rcfile)</li>
	<li>Configuration of plugins from within the gui</li>
	<li><strike>Remove dependence of the player on mikmod header files for
	data types, and uses standard portable types. (some system 
	header? Our own type header?)</strike> (Done, Feb 27 2005)</li>
	<li>Finish mad based mp3 plugin (file and url support)</li>
	<li>Optimise audio conversion code (direct conversion from source
	to destination formats instead of using intermediate 32bit format.
	</li>
	<li>Add a way to control the sound card volume</li>	
	</li>
	<li>Integrate input plugins in automake/configure setup instead of
	letting them be compiled separately.</li>
	<li>Input plugin in separate thread (to reduce impact on gui
	responsiveness when input plugins take a lot of time in updates)</li>
	<li>Finish other input plugins</li>
	<li>Check if there are any memory leaks</li>
</ul>
<hr>
<h2>Snapshots</h2>
Snapshots are available for testers and contributors. Keep in mind that
this is very experimental code. Snapshots posted here compiles at least on
my box, but may be undergoing heavy changes and can segfault.<br>
<a href="snapshots/mikmod-4-2005-03-22.tar.gz">mikmod-4-2005-03-22.tar.gz</a><br>
<a href="snapshots/mikmod-4-2005-02-27.tar.gz">mikmod-4-2005-02-27.tar.gz</a><br>

</body>
</html>
