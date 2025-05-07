package online.fredinfo.portfolio.domain.entities;

import java.util.List;
import java.util.UUID;

public interface SkillRepository {
    public Skill save(Skill skill);
    public List<Skill> findAll();
    public List<Skill> findByName(String name);
    public Skill findById(UUID id);
    public void deleteById(UUID id);
    public void delete(Skill skill);
}
