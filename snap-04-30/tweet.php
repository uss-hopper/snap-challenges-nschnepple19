<?php

public function getTweetsByTweetsDate(\PDO $pdo, $tweetDate) : \SplFixedArray {

	try {
		$tweetDate = self::validateUuid($tweetDate);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception)
	{
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	//create query template
	$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDate FROM tweet WHERE tweetDate = :tweetDate";
	//bind the tweet date to the place holder in the template
	$statement = $pdo->prepare($query);
	$parameters = ["tweetDate" => $tweetDate->tweetDate];
	$statement->execute($parameters);
	//build an array of dates

}