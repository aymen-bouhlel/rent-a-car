<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @private
 *
 * @author Baldur Rensch <brensch@gmail.com>
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('hautelook_alice');

        $rootNode
            ->children()
                ->scalarNode('fixtures_path')
                    ->defaultValue('Resources/fixtures')
                    ->info('Path to which to look for fixtures relative to the bundle/root directory paths.')
                ->end()
                ->arrayNode('root_dirs')
                    ->info('List of root directories into which to look for the fixtures.')
                    ->defaultValue([
                        '%kernel.root_dir%',
                        '%kernel.project_dir%',
                    ])
                    ->scalarPrototype()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
