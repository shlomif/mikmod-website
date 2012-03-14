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
<h1>Mikmod old news</h1>

<p align="right">
<a href="http://mikmod.raphnet.net">
Back to MikMod Homepage
</a>
</p>

<?php require("blocks.php") ?>


<?php block_before(); ?>
<p>
<b>Tue Jun 3:</b>
I have released a small patch for libmikmod-3.1.11 (which now becomes libmikmod-3.1.11-a). 
While most of my work and attention goes on the 3.2.x series, I still receive
occasional bug reports and patchs for the 3.1.11 version. There are not enough
changes to make a full release, but many people may find this patch useful.<br>
</p>
BUGFIXES
<ul>
<li>libmikmod playback now works correcly on amd64 (type size problem)</li>
<li>fixed warning issued by automake 1.8</li>
<li>config.sub and config.guess updated</li>
</ul>
<p>
You may grab this patch here:<br>
<A href="files/libmikmod-3.1.11-a.diff">libmikmod-3.1.11-a.diff</a>
<br> 
or in the <a href="#files">files</a> section.<br>
</p>


<p>
<b>Sun May 2:</b>
The logo contest, which was supposed to end on May 1st 2004, will be extended to 31 December 2004. Let's hope that I will receive more entries until then. I have only received one entry so far.<br>
<br>
Have a look to the <a href="logo_submissions.php">Logo submissions page</a>.
</p>

<p>
<b>Sun May 2:</b>
libmikmod documentation is now available online. Go to the 
<a href="#docs">documentation</a> section to read it.
</p>
<p>
<b>Mon Mar 22:</b>
I have created a page for binary releases. No official binaries are available yet, but there are contributed packages for slackware. See the <a href="binaries.php">binary page.</a><br>
</p>
<p>
<img align="right" src="logo.png" alt="Nologo">
<b>Wed Mar 3:</b>
The MikMod project needs a logo, so a <b>logo contest</b> has been created. The contest will
end on May 1st 2004. Please send your submissions by e-mail, at the address 
<a href="mailto:mikmod@raphnet.net">mikmod@raphnet.net</a>. Logos submissions can be 
seen on the <a href="logo_submissions.php">Logo submissions page</a>. If you like Mikmod,
have artistic skills and free time, go ahead and do something nice!<br clear="all">
</p>

<p><b>Fri Feb 20:</b>
The beta 2 release, for libmikmod 3.2.0 is out. This release includes 
a new AIFF disk writer, better MacOS X support, new macintosh project files
for Codewarrior 5/6 and Apple's MPW, and fixes for compilation under Solaris. 
For more details, look inside the NEWS file included in the archive.<br>
<br>
There is also a new <b>mailing list</b>, mikmod-announce@raphnet.net. You may
subscribe if you wish to be informed about new releases. Refer to the
<a href="#list">mailing list</a> section for more information.
<br>
</p>
<p><b>Mon Feb 2:</b>
The beta 1 release for libmikmod 3.2.0 and mikmod 3.2.2 are now available.
For more info on the changes, look in the <a href="#files">files</a> section and in the NEWS file. There is also 4 <a href="#screenshots">screenshots</a> demonstrating new features.
</p>
<p><b>Wed Jan 21:</b>
Released libmikmod 3.1.11. This version fixes a few bugs, and has support
for being compiled on win32 using lcc. See NEWS for a more complete list
of changes.
</p>

<p><b>Wed Jan 14:</b>
A have searched on the web and on Linux distributions ftp sites to
retreive older versions on libmikmod and mikmod. This completes a little more
the file section. Many versions are still missing though.
</p>
<p><b>Tue Jan 13:</b>
A <a href="http://packages.debian.org/unstable/sound/mikmod">debian package</a> 
has finally been made for Mikmod player 3.2.1. It is available in
the unstable distribution.
</p>
<p><b>Sat Dec 27:</b>
I have not been the only one who decided to make his own changes to MikMod since
the last release by Miodrag Vallat. Frank Loemker sent me his changes (many, many changes) for the player and the library. I have not yet looked into 
detail at his changes, but they look very promising. My next releases will
probably be based on his changes.
</p>
<p><b>Sat Dec 27:</b>
Mikmod player 3.2.1 is available for <a href="http://www.gentoo.org">gentoo</a> linux since Nov 28 2003.
</p>
<p><b>Sat Dec 27:</b>
After beeing down for 2 weeks, mikmod.raphnet.net is now back online. 
The site was down because of a connection problem(due to an irresponsible 
provider which decided to switch provider themselves, without doing 
any testing.). Needless to say that I have cancelled my account to 
select a provider which is more concerned about their customers.
</p>
<p><b>Fri Nov 28:</b>
Help wanted! I think it would be great to have a Debian GNU/Linux package for the new player (3.2.1). I have submitted a
whishlist type bug into the debian bug system 
(<a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=214431">bug id #214431</a>) on the 
6 Oct 2003, but received no feedback yet. If anyone knows how to make 
debian package and would like to make one for mikmod, 
please contact me.
</p>
<p><b>Tue Oct 7:</b>
Released Mikmod 3.2.1 to fix a mistake in the previous release. See the NEWS
files for more information.</p>
<p><b>Fri Oct 4:</b>
I have released my new version of the player.
</p>
<?php block_after(); ?>

<p align="right">
<a href="http://mikmod.raphnet.net">
Back to MikMod Homepage
</a>
</p>

<?php require("footer.php"); ?>

</body>
</html>
