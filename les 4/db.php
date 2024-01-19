<?php
  public function update($id, $naam, $stad){
        try {
            $stmt = $this->pdo->prepare("UPDATE klanten SET naam = ?, stad = ? WHERE id = ?");
            $stmt->execute([$naam, $stad, $id]);
        } catch (PDOException $e) {
            echo "Fout bij updaten van gegevens: " . $e->getMessage();
        }
    }

public function delete($id){
        try {
            $stmt = $this->pdo->prepare("DELETE FROM klanten WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo "Fout bij verwijderen van gegevens: " . $e->getMessage();
        }
    }
    ?>