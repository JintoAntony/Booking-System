Database Name : booking_system
===========================Theatre_Details===================
CREATE TABLE `theatre`(
  `theatre_id` int(64) NOT NULL auto_increment,
  `theatre_name` varchar(128) NOT NULL,  
  `theatre_district` varchar(128) NOT NULL,  
  `theatre_location` varchar(128) NOT NULL,  
  `theatre_secondclassseat` varchar(128) NOT NULL,   
  `theatre_firstclassseat` varchar(128) NOT NULL,    
  `theatre_balconyseat` varchar(128) NOT NULL, 	
  
  `theatre_facilities` varchar(128) NOT NULL, 	
  `theatre_services` varchar(128) NOT NULL,
     
   PRIMARY KEY  (`theatre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
===========================Theatre_Details===================
CREATE TABLE `movie`(
  `movie_id` int(64) NOT NULL auto_increment,
  `movie_theatre_id` varchar(128) NOT NULL,  
  `movie_name` varchar(128) NOT NULL,  
  `movie_noon` varchar(512) NOT NULL,  
  `movie_matinee` varchar(512) NOT NULL,  
  `movie_firstshow` varchar(512) NOT NULL,  
  `movie_secondshow` varchar(512) NOT NULL, 
 
 `movie_director` varchar(128) NOT NULL,
  `movie_producer` varchar(128) NOT NULL,
  `movie_music` varchar(128) NOT NULL,
  `movie_starring` varchar(128) NOT NULL,

   PRIMARY KEY  (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
===========================Date Details======================
CREATE TABLE `date`(
  `date_id` int(64) NOT NULL auto_increment,
  `date_theatre_id` varchar(128) NOT NULL,  
  `date_movie_id` varchar(128) NOT NULL,  
  `date_play` varchar(128) NOT NULL,    
  PRIMARY KEY  (`date_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
===========================Theatre_Details====================
CREATE TABLE `show`(
  `show_id` int(64) NOT NULL auto_increment,
  `show_theatre_id` varchar(128) NOT NULL,  
  `show_movie_id` varchar(128) NOT NULL,  
  `show_date_id` varchar(128) NOT NULL,  
  `show_noon` varchar(128) NOT NULL,  
  `show_matinee` varchar(128) NOT NULL,  
  `show_firstshow` varchar(128) NOT NULL,  
  `show_secondshow` varchar(128) NOT NULL,  
   PRIMARY KEY  (`show_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
=========================user=================================
CREATE TABLE `user`(
  `user_id` int(64) NOT NULL auto_increment,
  `user_theatre_id` varchar(128) NOT NULL,
  `user_movie_id` varchar(128) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_mobilenumber` varchar(30) NOT NULL,
  `user_address` varchar(256) NOT NULL,  
   PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
================================================================
CREATE TABLE `admin`(
  `username` varchar(128) NOT NULL,  /*actual user*/
  `password` varchar(128) NOT NULL,
PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
================================================================
CREATE TABLE `theatre_admin`(
  `username` varchar(128) NOT NULL,  /* same as theatre name */
  `password` varchar(128) NOT NULL,
PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
============================CONTACT==============================
CREATE TABLE `contact` (
  `contact_id` int(24) NOT NULL auto_increment,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(64) NOT NULL,
  `cont_message` varchar(300) NOT NULL,
  PRIMARY KEY  (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
================================================================


/*
===========================Buy Domain Table=======================
CREATE TABLE `buy_domain` (
  `domain_id` int(64) NOT NULL auto_increment,
  `domain_theatre_id` varchar(64) NOT NULL, //Here it is buyer
  `domain_name` varchar(128) NOT NULL,
  `domain_extension` varchar(128) NOT NULL,
  `domain_price` varchar(30) NOT NULL,
  PRIMARY KEY  (`domain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
============================CONTACT===============================
===========================Requested Domain Table=================
CREATE TABLE `request_domain` (
  `request_id` int(64) NOT NULL auto_increment,
  `request_domain_id` varchar(64) NOT NULL,
  `request_theatre_id` varchar(64) NOT NULL,   
  PRIMARY KEY  (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
===========================ShowCase Domain=========================
CREATE TABLE `showcase_domain` (
  `showcase_domain_id` int(64) NOT NULL auto_increment, 
  `showcase_domain_name` varchar(128) NOT NULL,
  `showcase_domain_extension` varchar(128) NOT NULL,  
  `showcase_domain_price` varchar(30) NOT NULL,  
  PRIMARY KEY  (`showcase_domain_id`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
===================================================================
//Not used presently
=====================================VALIDITY=======================
CREATE TABLE `validity`(
  `employer_id` int(4) NOT NULL auto_increment,
  `plan` varchar(30) NOT NULL,
  `number` int(4) NOT NULL,
  `validity1` int(4) NOT NULL,
  `downloads` int(4) NOT NULL,
  `validity2` date NOT NULL, 
PRIMARY KEY  (`employer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
=====================================================================
*>
