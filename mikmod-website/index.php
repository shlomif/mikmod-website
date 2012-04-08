<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META NAME="AUTHOR" CONTENT="Raphael Assenat">
<META NAME="keywords" CONTENT="MikMod, libMikmod, mikmod, libmikmod, music,
player, unix, linux, 669, amf, dsm, far, gdb, imf, it, med, mod, mtm, s3m, stm, stx, ult,
xm">
<META NAME="description" CONTENT="MikMod Homepage">
<title>MikMod homepage</title>
</head>
<body bgcolor="#efefdf">

<?php require("blocks.php") ?>
<img src="mikmod.png" alt="mikmod logo" align="left">
<h1>MikMod homepage</h1>
<br clear="all">
<a href="#what">What is MikMod?</a>
|
<a href="#news">News</a>
|
<a href="#features">Features</a>
|
<a href="#screenshots">Screenshots</a>
|
<a href="#license">License</a>
|
<a href="#files">Files</a>
|
<a href="#docs">Documentation</a>
|
<a href="#list">Mailing list</a>
|
<a href="#tools">Tools</a>
|
<a href="#ports">Ports and other versions</a>
|
<a href="#music">Where to get music</a>
<br>


<a name="what"></a>
<h2>What is MikMod?</h2>
<?php block_before(); ?>
<p>
Mikmod is a module player and library supporting many formats, including mod, s3m, it, and
xm. Originally a player for MS-DOS, MikMod has been ported to other platforms,
such as Unix, Macintosh, BeOS, and Java(!!)
</p>
<p>
Mikmod main authors are Jean-Paul Mikkers (MikMak), Jake Stine (Air
Richter) and Frank Loemker. Steve McIntyre was the first Unix maintainer,
followed by Peter Amstutz and finally Miodrag Vallat.
</p>
<p>
Unfortunately, since Miodrag Vallat does not have enough free time to work on
mikmod theses days, releases somewhat came to an halt. This is why I 
(Rapha&euml;l Ass&eacute;nat) decided to work on libmikmod/mikmod to add 
new features and bring the project further.<br>
</p>
<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>




<a name="news"></a>
<h2>News</h2>
<?php block_before(); ?>
<p>
<a href="http://www.sourceforge.net">
<img src="sflogo.png" align="right" alt="sourceforge logo"></a>
<b>Tue Apr 12 2005:</b>
libmikmod development 
<a href="#cvs">CVS</a> is now hosted on 
<a href="http://sourceforge.net/projects/mikmod/">
sourceforge.</a>
</p>

<p>
<b>Wed Feb 16:</b>
The voting period for the logo contest is now over. The winner is #13, by <a href="http://www.doubledev.com">Andre Bommele (a.k.a. SnipeZ / N.D. Ray)</a>. I received 10 logos from 4 different persons(not including logos I fetched from previous mikmod websites). Thank 
you to everyone who submitted logos and voted.
</p>
Contest entries and the number of votes they received are listed on 
the <a href="http://mikmod.raphnet.net/logo_submissions.php"> Logo submissions page.</a>
<p>
<b>Wed Jan 12:</b>
The logo contest is over, it is now time to choose which logo is the best. The voting 
period will end on Februray 12 (one month period). Each logo has been given a number. 
To vote for your favorite, write to raph@raphnet.net with a subject in the '[CONTEST] number'
format,
'number' being the number of your favorite logo.<br>
<br>
Contest entries are on the <a href="http://mikmod.raphnet.net/logo_submissions.php"> 
Logo submissions page.</a>
</p>
<p>
<b>Mon Oct 25:</b>
libMikMod and MikMod releases can now be downloaded via ftp, and for those who like
to live on the edge, anonymous cvs access is now available. There are a few unreleased changes in CVS already.
</p>

<?php block_after(); ?>
For older news, see the <a href="old_news.php">older news page</a>.<br>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>

<a name="features"></a>
<h2>Features</h2>
<?php block_before(); ?>
<ul>
	<li>Support for the following modules formats:<br> 
	<b>669</b> (Composer 669, Unis 669), <b>AMF</b> (DSMI Advanced Module Format),
	<b>AMF</b> (ASYLUM Music Format V1.0), <b>APUN</b> (APlayer),
	<b>DSM</b> (DSIK internal format), <b>FAR</b> (Farandole Composer),
	<b>GDM</b> (General DigiMusic), <b>IT</b> (Impulse Tracker),
	<b>IMF</b> (Imago Orpheus), <b>MOD</b> (15 and 31 instruments),
	<b>MED</b> (OctaMED), <b>MTM</b> (MultiTracker Module editor),
	<b>OKT</b> (Amiga Oktalyzer), <b>S3M</b> (Scream Tracker 3),
	<b>STM</b> (Scream Tracker), <b>STX</b> (Scream Tracker Music Interface Kit),
	<b>ULT</b> (UltraTracker), <b>UNI</b> (MikMod), <b>XM</b> (FastTracker 2)
	</li>
	<li>Can play files in archives formats: zip, lha, lzh, zoo, rar, gz, bz2, tar, 
tar.gz and tar.bz2</li>
	<li>Curses player interface. With optional color and themes.</li>
	<li>Playlist support.</li>
	<li>Configuration file.</li>
	<li>Works on most Unixes and win32</li>
</ul>

<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>





<a name="screenshots"></a>
<h2>Screenshots</h2>
<?php block_before(); ?>
<p>
Here are screenshots of the dynamic sample and instruments panels, volume bars panel, 
file selector and the theme editor added in mikmod 3.2.2:<br>
<a href="images/mikmod-3.2.2-dynsamp.png"><img src="images/th_mikmod-3.2.2-dynsamp.png" alt="dynamic sample panel screenshot thumnail"></a>
<a href="images/mikmod-3.2.2-volbars.png"><img src="images/th_mikmod-3.2.2-volbars.png" alt="volume bars panel screenshot thumnail"></a>
<a href="images/mikmod-3.2.2-filechooser.png"><img src="images/th_mikmod-3.2.2-filechooser.png" alt="filechooser screenshot"></a>
<a href="images/mikmod-3.2.2-theme-editor.png"><img src="images/th_mikmod-3.2.2-theme-editor.png" alt="theme editor screenshot"></a>
<br>
(libmikmod &#62;= 3.2.0 required for dynamic samples panel, dynamic instruments panel and volume bars panel).
</p>
<p>
Here is a screenshot of the new color interface in version 3.2.0:<br>
<a href="mikmod-3.2.0.png">
<img src="mikmod-3.2.0-thumb.png" width=80 height=57 alt="screenshot">
</a>
</p>
<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>

<a name="license"></a>
<h2>License</h2>
<?php block_before(); ?>
<p>
libmikmod is released under the terms of the 
<a href="http://www.gnu.org/copyleft/lesser.html">GNU Lesser General Public License (LGPL).</a><br>
mikmod is released under the terms of the 
<a href="http://www.gnu.org/copyleft/gpl.html">GNU General Public License (GPL).</a><br>
</p>
<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>


<a name="files"></a>
<h2>Files</h2>
<?php block_before(); ?>
<p>
Releases here are source only.<br> 
For binary releases, visit the 
<a href="binaries.php">binary releases</a> page 
for official and unofficial binaries.<br>

For previous releases, visit the 
<a href="old_releases.php">previous releases</a> page.
</p>
<table border=1>
<tr>
	<th>Filename</th>
	<th>Released</th>
	<th>Description</th>
	<th>Size</th>
</tr>
<tr>
	<td colspan=4><b>Player (Mikmod)</b></td>
</tr>
<tr>
	<td>
	<a href="files/mikmod-3.2.2-beta1.tar.gz">mikmod-3.2.2-beta1.tar.gz</a><br>
	<a href="files/mikmod-3.2.2-beta1.tar.bz2">mikmod-3.2.2-beta1.tar.bz2</a><br>
	<a href="files/mikmod-3.2.2-beta1.zip">mikmod-3.2.2-beta1.zip</a>
	</td>
	<td>2 Feb 2004</td>
	<td>
	New color interface by Andrew Zabolotny, with themes (built-in editor), 
	file selector, recursive directory scannning, threaded player. If
	built with libmikmod-3.2.0, samples and instrument panels are dynamic,
	and there is a new volume bar panel. See NEWS for more details.
	</td>
	<td>
		279k<br>
		208k<br>
		335k<br>
	</td>
</tr>
<tr>
	<td><a href="files/mikmod-3.2.1.tar.gz">mikmod-3.2.1.tar.gz</a></td>
	<td>7 Oct 2003</td>
	<td>Fixes a small mistake in the previous release, and adds a feature
	to set the xterm title according to the current song title.</td>
	<td>146k</td>
</tr>
<tr>
	<td colspan=4><b>Library (libmikmod)</b></td>
</tr>
<tr>
    <td>
    <a href="files/libmikmod-3.2.0b3.tar.gz">libmikmod-3.2.0b3.tar.gz</a> 
    </td>
	<td>Apr 08 2012</td>
    <td>Third beta of version of libmikmod - applied many downstream patches
    for various security bugs (and other bugs), and some other changes.</td>
    <td>Checksums:<br/>
<pre>
22aa49a1776e691a96f14ec8f5429e6d  files/libmikmod-3.2.0b3.tar.gz - MD5
3e2e04caff8726d5ceca0d8a5a1a43528cc627f935e92291aded1d87603ade4f - SHA-256.
</pre>
</td>
</tr>
<tr>
	<td>
	<a href="files/libmikmod-3.1.11-a.diff">libmikmod-3.1.11-a.diff</a>
	</td>
	<td>Jun 3 2004</td>
	<td>
	This is a small patch, to keep the 3.1.x series up to date, while
	I continue working on the 3.2.x series. This patch makes libmikmod work
	correctly on amd64, fixes a warning issued by automake-1.8 in libmikmod.m4, and includes an updated version of config.guess and config.sub.
	</td>
	<td>
	66k
	</td>
</tr>

<tr>
	<td><a href="files/libmikmod-3.1.11.tar.gz">libmikmod-3.1.11.tar.gz</a></td>
	<td>Jan 21 2004</td>
	<td>Lastest libmikmod2 release. Fixes a few small bugs, and adds support
	for compiling on win32 with lcc</td>
	<td>597k</td>
</tr>
</table>
<br>
All current and previous releases can also be downloaded via ftp:<br>
<a href="ftp://ftp.raphnet.net">ftp.raphnet.net</a>
<br>
<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>

<a name="cvs"></a>
<h2>CVS</h2>
<?php block_before(); ?>
Anonymous CVS access is available for both libmikmod and mikmod.<br>
<br>
libmikmod CVS is available from sourceforge:<br>
<pre>
cvs -d:pserver:anonymous@cvs.sourceforge.net:/cvsroot/mikmod login
cvs -z3 -d:pserver:anonymous@cvs.sourceforge.net:/cvsroot/mikmod co -P libmikmod
</pre>

<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>


<a name="docs"></a>
<h2>Documentation</h2>
<?php block_before(); ?>
Online documentation. This is the same doc as
found inside the docs/ subdir of libmikmod releases.<br>
<br>
<a href="doc/libmikmod-3.1.10/docs/mikmod.html">
Documentation for version 3.1.10</a> (130k single html page).<br>
And here is the latest doc in pdf format:
<a href="doc/mikmod.pdf">mikmod.pdf</a>
<br>


<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>


<a name="list"></a>
<h2>Mailing list</h2>
<?php block_before(); ?>
<p>
There is a now a mailing list available for those who would like
to be notified when there are new (lib)mikmod releases available.<br>
<br>
To subscribe, send a mail to 
<a href="mailto:mikmod-announce-request@raphnet.net">
mikmod-announce-request@raphnet.net
</a>
containing the word <b>SUBSCRIBE</b> in the body.<br>
<br>
This is a very low volume mailing list where users are *not* allowed
to post. I will probably create more mailing lists, such as mikmod-user 
and mikmod-devel, eventually.
</p>
<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>





<a name="tools"></a>
<h2>Tools</h2>
<?php block_before(); ?>
<p>
Here are two bash scripts to download random songs from 
<a href="http://www.modarchive.com">www.modarchive.com</a> (using their <i>Random Song</i> url), 
and save them and play them in mikmod. They require wget to work. Simply put them in a
directory where you have write permissions, and run them from there. <br>
<br>
A tmp/ and a downloaded/
subdirectory will be created. You can change the directory where downloaded
files are kept by editing randomplay.sh. DO NOT CHANGE the tmp directory unless
you understand the scripts.<br>
<br>
After the first file is downloaded, MikMod is started while a new one is
being downloaded in background. Once MikMod exits (MikMod exits after playing
because the -X option is used), the first file is moved to the downloaded
directory, and MikMod is relaunched to play the next one while a new one is
downloaded.<br>
<br>
<a href="files/random_play.sh.gz">random_play.sh.gz</a>
<a href="files/getmod.sh.gz">getmod.sh.gz</a>
<br>
<br>
To install:<br>
</p>
<pre>
# gunzip random_play.sh.gz getmod.sh.gz
# chmod a+x random_play.sh getmod.sh
</pre>
<br>
To use them:<br>
<pre>
# cd $wherever_you_installed_them
# ./random_play
</pre>
<br>
To stop them, do this:<br>
<pre>
# cd $wherever_you_installed_them
# touch stop     # this tells the background part not to download anymore once
                 # the current download is completed.
</pre>
<p>
And then exit mikmod.
</p>
<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>




<a name="ports"></a>
<h2>Ports and other versions</h2>
<?php block_before(); ?>
<p>
Mikmod for the Macintosh:<br>
<a href="http://www.algonet.se/~afb/mikmod/">
http://www.algonet.se/~afb/mikmod/</a>
</p>
<p>
MikMod for OS/2:<br>
<a href="http://members.rogers.com/kevin-langman/MikMod.html">
http://members.rogers.com/kevin-langman/MikMod.html</a>
</p>
<p>
Mikmod for Java:<br>
<a href="http://jmikmod.berlios.de">
jmikmod.berlios.de</a>
</p>
<p>
old MikMod for Unix page:<br>
<a href="http://www.tfn.net/~amstpi/mikmod.html">
http://www.tfn.net/~amstpi/mikmod.html</a>
</p>


<p>
libMikMod based player for the GP32 handheld called MikPlay32:<br>
<a href="http://www.cs.vu.nl/~cvwalta/?option=articles/gp32">
http://www.cs.vu.nl/~cvwalta/?option=articles/gp32</a>
</p>

<p>
TCL bindings:<br>
<a href="http://scripts.one.pl/tclmod/">
http://scripts.one.pl/tclmod</a>
</p>


<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>


<a name="music"></a>
<h2>Where to get music</h2>
<?php block_before(); ?>
<p>
<a href="http://www.modarchive.com">www.modarchive.com</a> Over 10 GB in more
than 28k compressed files.<br>
</p>
<p>
<a href="http://www.mirsoft.info/gamemods.php">www.mirsoft.info/gamemods.php</a> 
If you appreciate game music as much as I do, you will be pleased with all the
good old game tunes available on this website.
</p>
<?php block_after(); ?>
<p align="right"><a href="http://mikmod.raphnet.net/">top</a></p>


<br>
<br>

<?php require("footer.php"); ?>

</body>
</html>
