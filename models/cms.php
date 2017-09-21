<?php
	class cms_model extends model {
		public function get_standards() {
			return $this->borrow("cms/standards")->get_items();
		}
	}
?>
