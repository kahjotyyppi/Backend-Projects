<article>
    <h2>Tid och datum - Uppg 2</h2>

    <?php
   
    $veckodagar = array("Söndag", "Måndag", "Tisdag", "Onsdag", "Torsdag","Fredag","Lördag");
    $Months = array("Januari", "Februari", "Mars", "April", "Maj","Juni","Juli", "Augusti", "October", "September", "November","December");
    $dag = date("l");
    $week = date("W");

    if ($dag=="Sunday")
    {
        echo "Idag är det ".$veckodagar[0];
    }
    if ($dag=="Monday")
    {
        echo "Idag är det ".$veckodagar[1];
    }
    if ($dag=="Tuesday")
    {
        echo "Idag är det ".$veckodagar[2];
    }
    if ($dag=="Wednesday")
    {
        echo "Idag är det ".$veckodagar[3];
    }
    if ($dag=="Thursday")
    {
        echo "Idag är det ".$veckodagar[4];
    }
    if ($dag=="Friday")
    {
        echo "Idag är det ".$veckodagar[5];
    }
    if ($dag=="Saturday")
    {
        echo "Idag är det ".$veckodagar[6];
    }

    print (" den ".date("j")." ");

    $manad = date("n");

    if ($manad == 1)
    {
        echo $Months[0];
    }
    if ($manad == 2)
    {
        echo $Months[1];
    }
    if ($manad == 3)
    {
        echo $Months[2];
    }
    if ($manad == 4)
    {
        echo $Months[3];
    }
    if ($manad == 5)
    {
        echo $Months[4];
    }
    if ($manad == 6)
    {
        echo $Months[5];
    }
    if ($manad == 7)
    {
        echo $Months[6];
    }
    if ($manad == 8)
    {
        echo $Months[7];
    }
    if ($manad == 9)
    {
        echo $Months[8];
    }
    if ($manad == 10)
    {
        echo $Months[9];
    }
    if ($manad == 11)
    {
        echo $Months[10];
    }
    if ($manad == 12)
    {
        echo $Months[11];
    }

    print (", Vecka ".$week.". Vilken härlig dag!");
    
    //Denna vackra kodsnutt är Patriks, erkänner det här så de andra inte behöver skämmas. It works, det är det viktigaste! :D
    ?>

</article>

<div class="separator"></div>