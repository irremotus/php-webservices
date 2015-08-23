php-webservices
===============
Edit 'config.ini' to set the 'public_class_path' and 'private_class_path'.
Classes in 'public_class_path' will be exposed as services, with their methods available as actions of the service.
Classes in 'private_class_path' will be available to use in service classes, but will not be publicly exposed.
