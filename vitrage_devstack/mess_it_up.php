<?php
    if (isset($_POST['c']))
    {
         exec('/home/stack/problem.sh c');
    }
    if (isset($_POST['cu']))
    {
         exec('/home/stack/problem.sh cu');
    }
    if (isset($_POST['m']))
    {
         exec('/home/stack/problem.sh m');
    }
    if (isset($_POST['mu']))
    {
         exec('/home/stack/problem.sh mu');
    }
    if (isset($_POST['i']))
    {
         exec('/home/stack/problem.sh i');
    }
    if (isset($_POST['iu']))
    {
         exec('/home/stack/problem.sh iu');
    }
    if (isset($_POST['s']))
    {
         exec('/home/stack/problem.sh s');
    }
    if (isset($_POST['su']))
    {
         exec('/home/stack/problem.sh su');
    }
?>
<html>
<body>
    <h1>Vitrage Demo - Mess Things Up!<h1>
    <img src="http://www.clipartkid.com/images/111/10-broken-computer-clip-art-free-cliparts-that-you-can-download-to-you-PrKGrt-clipart.jpeg" alt="Mountain View" style="width:304px;height:228px;">

    <h2>Cpu</h2>
    <form method="post">
    <p>
        <button name="c">Raise CPU levels</button>
    </p>
    <p>
        <button name="cu">Undo</button>
    </p>
    </form>
    <h2>Memory</h2>
    <form method="post">
    <p>
        <button name="m">Raise Memory levels</button>
    </p>
    <p>
        <button name="mu">Undo</button>
    </p>
    </form>
    <h2>Interface</h2>
    <form method="post">
    <p>
        <button name="i">ifdown public interface</button>
    </p>
    <p>
        <button name="iu">Undo</button>
    </p>
    </form>
    <h2>Switch</h2>
    <form method="post">
    <p>
        <button name="s">Switch public port failure</button>
    </p>
    <p>
        <button name="su">Undo</button>
    </p>
    </form>
</body>
