<?php
	class Study
	{
		private $id;
		private $name;
		private $description;
		private $school_id;
		
		public function _get($property) 
		{
            if (property_exists($this, $property)) 
			{
                return $this->$property;
            }
        }
        
        public function _set($property, $value) 
		{
            if (property_exists($this, $property)) 
			{
                $this->$property = $value;
            }
            return $this;
        }
	}
?>