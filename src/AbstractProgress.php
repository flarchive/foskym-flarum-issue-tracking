<?php

/*
 * This file is part of foskym/flarum-issue-tracking.
 *
 * Copyright (c) 2024 FoskyM.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace FoskyM\IssueTracking;

class AbstractProgress implements \ArrayAccess {
  public $updated_at;
  public int $resolved = 0;
  public int $unresolved = 0;
  public int $total = 0;
  public function offsetExists(mixed $offset): bool {
    return isset($this->$offset);
  }

  public function offsetGet(mixed $offset): mixed {
    return $this->$offset;
  }

  public function offsetSet(mixed $offset, mixed $value): void {
    $this->$offset = $value;
  }

  public function offsetUnset(mixed $offset): void {
    $this->$offset = null;
  }
}