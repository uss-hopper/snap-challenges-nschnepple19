SELECT
	tweet.tweetContent,
		`like`.likeDate
		profile.profileAtHandle
FROM tweet
		INNER JOIN `like` ON `like`.likeTweetId = tweet.tweetId
INNER JOIN profile ON profile.profileId = `like`.likeProfileId
	WHERE tweetId = HEX('0536faef082b454e9d444cdbe7887d7a');


