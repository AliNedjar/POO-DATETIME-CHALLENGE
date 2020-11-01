<?php

$destinationTime = DateTime::createFromFormat('M j Y g:i a', 'OCT 21 2015 4:29 pm');
echo $destinationTime->format('M j Y g:i a'); ?> <br> <?php
echo 'Destination Time'; ?> <br> <?php


$presentTime = DateTime::createFromFormat('M j Y g:i a', 'OCT 21 2015 4:06 pm');
echo $presentTime->format('M j Y g:i a'); ?> <br> <?php
echo 'Destination Time'; ?> <br> <?php


$interval = $presentTime->diff($destinationTime);
echo $interval->format('%Y années, %M mois, %d jours, %H heures, et %i minutes de différence');
