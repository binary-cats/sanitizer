# Upgrading

## Version Changes

### Dependencies
- **illuminate/support**: Updated to version `^12.0`
- **illuminate/validation**: Updated to version `^12.0`
- **nesbot/carbon**: Updated to version `^3.0`
- **phpunit/phpunit**: Updated to version `^11.0` for development.

### Minimum Stability
- The minimum stability is set to `dev`, which may allow for unstable packages to be installed. Ensure that you are aware of the implications of using development versions.

## Upgrade Steps
1. **Update Dependencies**: Run `composer update` to install the latest versions of the required packages.
2. **Check for Breaking Changes**: Review the changelogs for `illuminate/support`, `illuminate/validation`, and `nesbot/carbon` for any breaking changes that may affect your application.
3. **Test Your Application**: After updating, run your tests to ensure everything works as expected. Use the command `composer test` to execute your PHPUnit tests.
4. **Review Laravel Configuration**: Ensure that the service provider and facade alias are correctly registered in your Laravel application.

## Additional Notes
- If you encounter issues, consider checking the documentation for each package for guidance on resolving compatibility problems.

