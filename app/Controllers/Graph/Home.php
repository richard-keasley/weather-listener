<?php namespace App\Controllers\Graph;

class Home extends \App\Controllers\BaseController {

public function getIndex() {
	\App\ThirdParty\jpgraph::blank();
}

}
