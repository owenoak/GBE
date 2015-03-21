<?php namespace DemocracyApps\GB\ApiTransformers;

/**
 *
 * This file is part of the Government Budget Explorer (GBE).
 *
 *  The GBE is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GBE is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with the GBE.  If not, see <http://www.gnu.org/licenses/>.
 */

class OrganizationTransformer extends ApiTransformer {

    /**
     * @param $category
     * @param array $parameters
     * @return array
     */
    public function transform($organization, array $parameters)
    {
        return [
            'id' => $organization->id,
            'name'=>$organization->name,
            'description' => $organization->description
        ];
    }
}