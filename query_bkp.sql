INSERT INTO projects (projectName, projectDescription, projectLink, projectImageName)
VALUES
('TicTacToe', 'Try beating computer or your friend.', 'https://codepen.io/alexlox/full/RMYoqR', 'tictactoe.png'),
('Old Portfolio', 'This portfolio is deprecated. Use www.alexandru-necula.dx.am instead.' , 'http://www.old.alexandru-necula.dx.am/', 'oldportfolio.png'),
('Drum Machine', 'Play with music.', 'https://codepen.io/alexlox/pen/EeJdPw', 'drummachine.png'),
('Simon Game', 'How good is your memory?', 'https://codepen.io/alexlox/full/WJQKKG', 'simongame.png'),
('Local Weather', 'Shows the weather in your zone but you need to allow location access and disable secure connection protection.', 'https://codepen.io/alexlox/full/dNzgKj', 'localweather.png'),
('Twitch TV Live Tracker', 'See which of your favourite twitch channels is live now.', 'https://codepen.io/alexlox/full/QdPmRR', 'twitchtracker.png'),
('Javascript Calculator', 'Not a brilliant one, but it works.', 'https://codepen.io/alexlox/full/vRXwmr', 'calculator.png'),
('Wikipedia Viewer', 'Search through wikipedia or jump to a random link.', 'https://codepen.io/alexlox/full/KarLEK', 'wikipediaviewer.png'),
('Markdown Previewer', 'View your markdown.', 'https://codepen.io/alexlox/full/pOQZpj', 'markdownpreviewer.png');

CREATE TABLE accounts (
	idAccount int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(32) NOT NULL,
    pass LONGTEXT NOT NULL,
    email VARCHAR(64) NOT NULL,
    messagesNr int(6) DEFAULT 0,
    lastMessage TEXT
);