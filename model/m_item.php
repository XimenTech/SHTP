<?php

	class m_item{
		public function additem(){
			GLOBAL $items;
			$items[] = new item(2,'little princess','fion');
		}
	}