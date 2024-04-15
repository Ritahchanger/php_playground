 <?php


    class Bid

    {
        private $minimumBid  = 5;
        private $bidAmount;

        public function setAmount($amount)
        {


            if($amount < $this->minimumBid){
                $this->bidAmount = $this->minimumBid;
            }else{
                $this->bidAmount = $amount;
            }


            $this->bidAmount = $amount;
        }

    }


