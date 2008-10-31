<?php include "../common_php.inc"; ?>

<?php gLabelsHeader("download"); ?>


<h1 class="download">Stable Version ...</h1>




<h2>System Requirements</h2>
<p>
gLabels is designed to run on <i>GNOME 2.16+</i>, but more specifically it requires the following libraries or newer.
</p>
<ul>
  <li>GTK+-2.10.x</li>
  <li>LIBGNOME[UI]-2.16.x</li>
  <li>LIBXML-2.6.x</li>
  <li>LIBGLADE-2.6.x</li>
</ul>
<p>
Note: to compile gLabels on most GNU/Linux systems, you will need the development packages (e.g., gtk2-devel or gtk2-dev)
installed for each of these libraries and their dependencies.
Just having the base library packages installed is not enough.
</p>


<h2>Source:</h2>
<ul>
  <li>
    <div class="latest">
      <?a_sfdownload("glabels-2.2.3.tar.gz");?> (latest version)
    </div>
  </li>
  <li><?a_sfdownload("glabels-2.2.2.tar.gz");?></li>
  <li><?a_sfdownload("glabels-2.2.1.tar.gz");?></li>
  <li><?a_sfdownload("glabels-2.2.0.tar.gz");?></li>
</ul>





<h2>Third party packages</h2>
<p>
gLabels is currently available for most popular GNU/Linux distributions through
their associated repositories, including the following repositories:
<ul>
  <li>Debian</li>
  <li>Fedora Extras</li>
  <li>Ubuntu Universe</li>
</ul>







<a id="unstable"></a>
<h1 class="development">Development (Unstable) Version ...</h1>

<h2>System Requirements</h2>
<p>
The development version of gLabels is designed to run on <i>GNOME 2.16+</i>, but more specifically it requires the following libraries or newer.
</p>
<ul>
  <li>GTK+-2.10.x</li>
  <li>LIBGNOME[UI]-2.16.x</li>
  <li>LIBXML-2.6.x</li>
  <li>LIBGLADE-2.6.x</li>
</ul>
<p>
Note: to compile gLabels on most GNU/Linux systems, you will need the development packages (e.g., gtk2-devel or gtk2-dev)
installed for each of these libraries and their dependencies.
Just having the base library packages installed is not enough.
</p>


<h2>Source:</h2>
<ul>

  <li>
    <div class="latest">
	  <i>No post 2.2.x development version available yet.</i>
    </div>
  </li>
</ul>

<h2>Subversion:</h2>
<p>
The latest bleading-edge version of gLabels can be checked out through subversion with
the following command.
</p>
<div class="codebox">$  svn co https://glabels.svn.sourceforge.net/svnroot/glabels/trunk/glabels2
</div>
<p>
More information can be found at the <?a("http://sourceforge.net/svn/?group_id=46122","gLabels subversion page at Sourceforge");?>.
</p>
<ul>
  <li><?a("http://glabels.svn.sourceforge.net/viewvc/glabels/","Browse the Subversion Repository");?></li>
</ul>







<h2><?a("http://sourceforge.net/project/showfiles.php?group_id=46122", "Older versions ...");?></h2>





<?php gLabelsFooter(); ?>
