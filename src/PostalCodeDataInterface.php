<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\PostalCode;

interface PostalCodeDataInterface
{
    public function getCountries(): array;
    public function getPattern(string $country): string;
    public function hasCountry(string $country): bool;
}
