package fred.portfolio.services;

import fred.portfolio.data.dtos.SkillSaveDTO;
import fred.portfolio.data.dtos.SkillShowDTO;
import fred.portfolio.data.entities.Skill;
import fred.portfolio.data.mappers.SkillMapper;
import fred.portfolio.data.repositories.SkillRepository;
import fred.portfolio.web.errors.NotFoundException;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Service
@Transactional
public class SkillService {
    private final SkillMapper skillMapper;
    private final SkillRepository skillRepository;

    public SkillService(SkillMapper skillMapper, SkillRepository skillRepository) {
        this.skillMapper = skillMapper;
        this.skillRepository = skillRepository;
    }

    public List<SkillShowDTO> getAll() {
        List<SkillShowDTO> skills = new ArrayList<>();
        Iterable<Skill> skillIterable = this.skillRepository.findAll();
        skillIterable.forEach(skill -> skills.add(this.skillMapper.skillToSkillDto(skill)));
        return skills;
    }

    public List<SkillShowDTO> getAllByName(String name) {
        List<SkillShowDTO> skills = new ArrayList<>();
        Iterable<Skill> skillIterable = this.skillRepository.findAllByNameLike(name);
        skillIterable.forEach(skill -> skills.add(this.skillMapper.skillToSkillDto(skill)));
       return skills;
    }

    public SkillShowDTO getById(Long id) {
        Optional<Skill> skillOptional = this.skillRepository.findById(id);
        if (skillOptional.isEmpty()) {
            throw new NotFoundException("Skill with id " + id + " not found");
        }
        return this.skillMapper.skillToSkillDto(skillOptional.get());
    }

    public SkillShowDTO create(SkillSaveDTO skillDTO) {
        Skill skill = this.skillMapper.skillDtoToSkill(skillDTO);
        skill = this.skillRepository.save(skill);
        return this.skillMapper.skillToSkillDto(skill);
    }

    public SkillShowDTO update(Long id, SkillSaveDTO skillDTO) {
        Optional<Skill> skillOptional = this.skillRepository.findById(id);
        if (skillOptional.isEmpty()) {
            throw new NotFoundException("Skill with id " + id + " not found");
        }
        Skill skillToSave = this.skillMapper.skillDtoToSkill(skillDTO);
        skillToSave.setId(id);
        skillToSave = this.skillRepository.save(skillToSave);
        return this.skillMapper.skillToSkillDto(skillToSave);
    }

    public void delete(Long id) {
        this.skillRepository.deleteById(id);
    }
}
