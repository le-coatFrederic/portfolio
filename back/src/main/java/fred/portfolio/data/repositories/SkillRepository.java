package fred.portfolio.data.repositories;

import fred.portfolio.data.entities.Skill;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import java.util.List;
import java.util.Optional;

@Repository
public interface SkillRepository extends CrudRepository<Skill, Long> {
    Optional<Skill>findByName(String name);
    List<Skill> findAllByNameLike(String name);
}
