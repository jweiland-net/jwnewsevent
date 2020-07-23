#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
	is_event tinyint(4) DEFAULT '0' NOT NULL,
	event_start int(11) DEFAULT '0' NOT NULL,
	event_end  int(11) DEFAULT '0' NOT NULL,
	location varchar(100) DEFAULT '' NOT NULL,
	organizer varchar(100) DEFAULT '' NOT NULL
);
