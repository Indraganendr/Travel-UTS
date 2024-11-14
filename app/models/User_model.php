<?php

class User_model {
    private $nama = 'Embark on Adventure, Explore the Ocean';
    private $desk = 'Enjoy the beauty of the underwater world and the charm of amazing beaches with us. We offer tour packages to various exotic destinations in Indonesia which are famous for their beautiful seas and beaches. Discover an unforgettable holiday experience and explore a hidden paradise in the country.';
    private $info = 'Destination';
    private $infodesk = 'Explore the beauty of untouched beaches, scenic landscapes, and discover unforgettable experiences that await you. Let us guide you through the best destinations to unwind and reconnect with nature.';
    private $who = 'Who we are';
    private $whoinfo = 'From our origins as a leisure travel agent in 2000, PT. RSK Tours (RSK Tour) has evolved to become a provider of trusted corporate travel solutions under the brand RSK Tour. This transformation was the natural outgrowth of our reputation for reliability, the range of our resources, and our deep familiarity with the Indonesian market. Today, drawing on our history, we continue to nurture personalized, long-term relationships, supported by our scale and modern technology: relationships where we know our customers so well that we can suggest and deliver Total Travel Solutions for their needs.';
    private $why = 'Why us';
    private $whyinfo = 'Drawing on our experience, market knowledge, and industry connections, RSK Tour is able to offer innovative and best-value travel solutions for you. Customers greatly appreciate our personalized approach, along with the reassurance and reliability that our solid national and global infrastructure offers. At the end of the day, our goal is to give you convenient one-stop service for all your travel needs.';

    
    public function getData()
    {
        // Memanggil 8 Data 
        return [$this->nama, $this->desk, $this->info, $this->infodesk, $this->who, $this->whoinfo, $this->why, $this->whyinfo];
    }
}