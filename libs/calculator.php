<?php
class Calculator
{
	private $paramOne;
	private $paramTwo;
	private $memory;

	public function setParamOne($paramOne)
  {
		$this->paramOne = (int)$paramOne;
	}

	public function setParamTwo($paramTwo)
  {
		$this->paramTwo = (int)$paramTwo;
	}

	public function getParamOne()
  {
		return $this->paramOne;
	}

	public function getParamTwo()
  {
		return $this->paramTwo;
	}

	public function summa($paramOne, $paramTwo)
  {
		return $paramOne + $paramTwo;
	}

	public function subtraction($paramOne, $paramTwo)
  {
		return $paramOne - $paramTwo;
	}

	public function multiplication($paramOne, $paramTwo)
  {
		return $paramOne * $paramTwo;
	}

	public function division($paramOne, $paramTwo)
  {
		if($paramTwo != 0)
    {
			return $paramOne / $paramTwo;
		}
    else
    {
			return ERROR;
		}
	}

	public function square($paramOne)
  {
		return sqrt($paramOne);
	}

  public function percentage($paramOne, $paramTwo)
  {
      return ($paramOne / 100) * $paramTwo;
  }
  public function setMemory($memory)
  {
  $this->memory = (int)$memory;
  }
  public function getMemory()
  {
    return $this->memory;
  }
}
?>
