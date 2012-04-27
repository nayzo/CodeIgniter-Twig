# Yet another Twig library for CodeIgniter 2.x

## Installation

Super easy -- just copy the files into their respective CodeIgniter locations. To enable the cache, modify config/twig.php so that $config['cache'] points to your cache directory. E.g.,

	$config['cache'] = APPPATH . 'views/cache';

## Usage

Also, super easy --

	$this->load->library('twig');
	$this->twig->render('my_template');

or, with additional data passed to the template:
	
	$this->twig->render('my_template', array('a_variable' => 'my value'));

or, render the template but don't display it:
	
	$output = $this->twig->render('my_template');

### Exposing Additional Functions

Guess what ... it's super easy! From anywhere within your CI application:

	$this->twig->addFunction('form_open');
	
or, have a look at the loadMyFunctions() method in libraries/Twig.php and uncomment a block that works best for you to have functions added when the library is loaded.
	
Call these additional functions just like you would call any other function:
	
	{{ form_open('submit/url') }}

## Thanks to the following for precedents

	https://github.com/MaherSaif/codeigniter-twig
	https://github.com/jamiepittock/codeigniter-twig
	https://github.com/bmatschullat/Twig-Codeigniter
	https://github.com/dilantha/codeigniter-twig
	http://getsparks.org/packages/twig/versions/HEAD/show
	http://codeigniter.com/forums/viewthread/170832/#815285

## License
DON'T BE A DICK PUBLIC LICENSE

Version 1, December 2009

Copyright (C) 2009 Philip Sturgeon <email@philsturgeon.co.uk>

Everyone is permitted to copy and distribute verbatim or modified copies of this license document, and changing it is allowed as long as the name is changed.

DON'T BE A DICK PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

1. Do whatever you like with the original work, just don't be a dick.

Being a dick includes - but is not limited to - the following instances:

1a. Outright copyright infringement - Don't just copy this and change the name.
1b. Selling the unmodified original with no work done what-so-ever, that's REALLY being a dick.
1c. Modifying the original work to contain hidden harmful content. That would make you a PROPER dick.

2. If you become rich through modifications, related works/services, or supporting the original work, share the love. Only a dick would make loads off this work and not buy the original works creator(s) a pint.

3. Code is provided with no warranty. Using somebody else's code and bitching when it goes wrong makes you a DONKEY dick. Fix the problem yourself. A non-dick would submit the fix back.