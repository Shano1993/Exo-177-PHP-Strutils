<?php

class StrUtils {
    private $str;

    public function bold(string $str): string { ?>
        <p style="font-weight: bold"><?= $str ?></p> <?php
        return $this->str = $str;
    }

    public function italic(string $str): string { ?>
        <p style="font-style: italic"><?= $str ?></p> <?php
        return $this->str = $str;
    }

    public function underline(string $str): string { ?>
        <p style="text-decoration-line: underline"><?= $str ?></p> <?php
        return $this->str = $str;
    }

    public function capitalize(string $str): string { ?>
        <p style="text-transform: capitalize"><?= $str ?></p> <?php
        return $this->str = $str;
    }

    public function uglify(string $str):string { ?>
        <p style="font-weight: bold; font-style: italic; text-decoration-line: underline"><?= $str ?></p> <?php
        return $this->str = $str;
    }
}