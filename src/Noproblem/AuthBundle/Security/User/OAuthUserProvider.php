<?php

namespace Noproblem\AuthBundle\Security\User;

use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthAwareUserProviderInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\EntityUserProvider;

/**
 * Description of UserProvider
 *
 * @author Kirill Zabarniuk <kirill.zabarniuk at gmail.com>
 */
class OAuthUserProvider extends EntityUserProvider implements OAuthAwareUserProviderInterface
{
    //put your code here
}
