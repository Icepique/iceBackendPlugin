<?php

function url_to_frontend($name, $parameters)
{
  return sfProjectConfiguration::getActive()->generateFrontendUrl($name, $parameters);
}
