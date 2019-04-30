<?php

public function getTweetsByTweetsDate(\PDO $pdo, $tweetDate) : \SplFixedArray {

	try {
		$tweetDate = self::validateUuid($tweetDate);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	//create query template
	$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDate FROM tweet WHERE tweetDate = :tweetDate";
	//bind the tweet date to the place holder in the template
	$statement = $pdo->prepare($query);
	$parameters = ["tweetDate" => $tweetDate->tweetDate];
	$statement->execute($parameters);

// build an array of tweets
	$tweets = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false) {
	}
	try {
		$tweet = new Tweets($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDate"]);
		$tweets[$tweets->key()] = $tweet;
		$tweets->next();
	} catch(\Exception $exception) {
		// if the row couldn't be converted, rethrow it
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	return($tweets);
}

